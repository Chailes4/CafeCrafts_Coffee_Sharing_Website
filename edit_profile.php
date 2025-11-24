<?php
session_start();
include_once "db.php";

// Redirect to login page if user is not logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}

// Fetch user data from the database
$email = $_SESSION["email"];
$sql = "SELECT firstname, lastname, email FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Importing a stylish font -->
    <style>
        body {
            font-family: 'Roboto', sans-serif; 
            background-color: #f5f7fa; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(images/bg_1.jpg);
        }
        .container {
            max-width: 500px; 
            padding: 30px;
            background-color: #976d49f0; 
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2); 
        }
        h2 {
            text-align: center;
            color: white;
            font-size: 24px; 
        }
        form {
            text-align: left;
        }
        label {
            font-weight: 700; /* Bold font for labels */
            color: white;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd; /* Lighter border color */
            border-radius: 5px; /* Softer corners */
            box-sizing: border-box;
            transition: all 0.2s; /* Smooth transitions */
        }
        input[type="submit"] {
            background-color: #683815; 
            color: white;
            padding: 12px; /* Increased padding */
            border-radius: 5px;
            border: none; /* No border for a cleaner look */
            cursor: pointer;
            transition: background-color 0.3s; /* Smooth transition on hover */
        }
        input[type="submit"]:hover {
            background-color: #905931; 
        }
        .session-message {
            font-size: 14px; /* Smaller font size for messages */
            color: black; /* Grey color for softer text */
            margin-bottom: 15px;
            text-align: center; /* Center-align the message */
        }
        .back-button {
            background-color: #683815;
            border-radius: 5px;
            border: none; 
            cursor: pointer;
            padding: 12px;
        }
        .back-button:hover {
            background-color: #905931;
        }
    </style>
<script>
    // JavaScript for showing password length error alert
    function validateForm() {
        var newPassword = document.getElementById("new_password").value;
        if (newPassword !== "" && newPassword.length < 8) {
            alert("New Password must be at least 8 characters long.");
            return false;
        }
        return true;
    }
</script>

</head>
<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <form action="update_profile.php" method="post" onsubmit="return validateForm()">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($user["firstname"]); ?>" required>
            
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($user["lastname"]); ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user["email"]); ?>" required>
            
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required>
            
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password">
            
            <?php 
            // Check for session message and display it if exists
            if (isset($_SESSION["message"])) {
                echo "<div class='session-message'>" . htmlspecialchars($_SESSION["message"]) . "</div>";
                unset($_SESSION["message"]); // Clear the session message
            }
            ?>
            
            <input type="submit" value="Update Profile">
            <button class="back-button"><a href="profile.php" style="color: white; text-decoration: none;">Back</a></button>
        </form>
    </div>
</body>
</html>