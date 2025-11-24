<?php
// Include database connection
include_once 'db.php';

// Start session
session_start();

// Get form data
$email = $_POST['LogEmail'];
$password = $_POST['LogPassword'];

// Check if email exists in users table
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Email exists in users table, verify password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        // Password is correct, set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        $_SESSION["firstname"] = $row['firstname'];
        // Redirect to appropriate page based on user role
        header("Location: login.html");
        exit();
    } else {
        // Incorrect password
        header("Location: index.php?error=wrongpassword");
        exit();   
    }
} else {
    // Check if email exists in admins table
    $sql = "SELECT * FROM admins WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        // Email exists in admins table, verify password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION["admin_loggedin"] = true;
            $_SESSION["email"] = $email;
            // Redirect to admin page
            header("Location: admin_approval.php");
            exit();
        } else {
            // Incorrect password
            header("Location: index.php?error=wrongpassword");
            exit();
        }
    } else {
        // Email not found in either users or admins table
        header("Location: index.php?error=emailnotfound");
        exit();    
    }
}

// Close database connection
mysqli_close($conn);
?>
