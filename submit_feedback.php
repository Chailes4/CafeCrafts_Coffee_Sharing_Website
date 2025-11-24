<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db.php';

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) { // If successful
        // Redirect to feedback.html with a success message
        header("Location: feedback.html?status=success&message=Thank you for your feedback!");
        exit; // Exit after header
    } else { // If there's an error
        // Redirect to feedback.html with an error message
        header("Location: feedback.html?status=error&message=An error occurred. Please try again.");
        exit; // Exit after header
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else { // If accessed without a POST request
    header("Location: feedback.html");
    exit; // Exit to prevent unintended processing
}
