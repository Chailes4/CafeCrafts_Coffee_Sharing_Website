<?php
session_start();
include_once "db.php";

// Redirect to login page if user is not logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    // Check if the new email already exists in the database
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0 && $_SESSION["email"] !== $email) {
        // Email already exists, display a message to the user
        $_SESSION["message"] = "The email address you entered is already taken.";
        header("location: edit_profile.php");
        exit;
    }

    // Check if the user wants to change the password
    if (!empty($_POST["current_password"]) && !empty($_POST["new_password"])) {
        $current_password = $_POST["current_password"];
        $new_password = $_POST["new_password"];

        // Verify the current password before updating
        $sql = "SELECT password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $_SESSION["email"]);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($password_hash);
        $stmt->fetch();

        if (password_verify($current_password, $password_hash)) {
            // Check if new password is different from current password
            if (!password_verify($new_password, $password_hash)) {
                // Current password is correct and new password is different, update the password
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET password = ? WHERE email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $new_password_hash, $_SESSION["email"]);
                $stmt->execute();
            } else {
                // New password is the same as the current password, display an error message
                $_SESSION["message"] = "New password must be different from the current password.";
                header("location: edit_profile.php");
                exit;
            }
        } else {
            // Current password is incorrect, display an error message
            $_SESSION["message"] = "Incorrect current password.";
            header("location: edit_profile.php");
            exit;
        }
    } elseif (empty($_POST["current_password"]) && !empty($_POST["new_password"])) {
        // Current password field is empty but new password is provided
        $_SESSION["message"] = "Please enter your current password to change it.";
        header("location: edit_profile.php");
        exit;
    }

    // Update user's details in the database
    $sql = "UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $_SESSION["email"]);
    $stmt->execute();

    // Update added_by in coffee_items table
    $sql_update_coffee_items = "UPDATE coffee_items SET added_by = ? WHERE added_by = ?";
    $stmt_update_coffee_items = $conn->prepare($sql_update_coffee_items);
    $stmt_update_coffee_items->bind_param("ss", $firstname, $_SESSION["firstname"]);
    $stmt_update_coffee_items->execute();

    // Update user's email in the comments table
    $sql_comments = "UPDATE comments SET email = ? WHERE email = ?";
    $stmt_comments = $conn->prepare($sql_comments);
    $stmt_comments->bind_param("ss", $email, $_SESSION["email"]);
    $stmt_comments->execute();



    // If the email has been changed, update the session email
    if ($_SESSION["email"] !== $email) {
        $_SESSION["email"] = $email;
    }
    // Redirect back to profile page after updating
    header("location: profile.php");
    exit;
}
?>