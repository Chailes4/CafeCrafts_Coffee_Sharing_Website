<?php
session_start(); 

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // User is not logged in, return an error
    http_response_code(401); // Unauthorized
    exit("You are not logged in.");
}

// Include the database connection file
include('db.php');

// Get the coffee ID and comment from the form data
$coffee_id = mysqli_real_escape_string($conn, $_POST['coffee_id']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

// List of banned words
$banned_words = array("tangina", "gago", "tanga", "tae", "tarantado","demonyo","hayop", "dyablo","motherfucker","pakyu", "fuck you"); // Add more words as needed

// Check if the comment contains any banned words
foreach ($banned_words as $word) {
    if (stripos($comment, $word) !== false) {
        // If a banned word is found, return an error
        http_response_code(400); // Bad Request
        exit;
    }
}
// Insert the comment into the database
$sql = "INSERT INTO comments (coffee_id, email, comment) VALUES ('$coffee_id', '{$_SESSION['email']}', '$comment')";
if (mysqli_query($conn, $sql)) {
    // Comment inserted successfully
    // You can echo the HTML for the new comment here if you want to immediately display it on the page
    // For simplicity, I'll just return a success message
    echo "Comment added successfully.";
} else {
    // Error inserting comment
    http_response_code(500); // Internal Server Error
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
