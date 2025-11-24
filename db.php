<?php
// Database configuration
$dbHost = 'localhost'; // Change to your database host
$dbUsername = 'root'; // Change to your database username
$dbPassword = ''; // Change to your database password
$dbName = 'recipee'; // Change to your database name

// Create database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>