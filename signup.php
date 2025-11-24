<?php
// Include database connection
include_once 'db.php';

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if password meets minimum length requirement
$minPasswordLength = 8; // Minimum password length
if (strlen($password) < $minPasswordLength) {
    header("Location: index.php?passwordLengthError=true");
    exit(); // Stop further execution
}

$password = password_hash($password, PASSWORD_DEFAULT); // Hash password for security

// Check if email already exists in the database
$emailCheckQuery = "SELECT * FROM users WHERE email = '$email'";
$emailCheckResult = mysqli_query($conn, $emailCheckQuery);
if (mysqli_num_rows($emailCheckResult) > 0) {
    // Email is already taken, redirect back to signup page with query parameter
    header("Location: index.php?emailTaken=true");
    exit(); // Stop further execution
}

// Insert user data into database
$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    session_start(); // Start the session
    $_SESSION['signup_success'] = true; // Set session variable
    header("Location: index.php");
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Close database connection

mysqli_close($conn);
?>
