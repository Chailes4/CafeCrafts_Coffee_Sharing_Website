<?php
// Database configuration
$dbHost = 'sql100.infinityfree.com'; // Change to your database host
$dbUsername = 'if0_40585176'; // Change to your database username
$dbPassword = 'cafecrafts28'; // Change to your database password
$dbName = 'if0_40585176_recipe'; // Change to your database name

// Create database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>