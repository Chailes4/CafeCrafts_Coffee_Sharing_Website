<?php
// Include database connection
include 'db.php';

// Function to archive feedback by ID
function archiveFeedback($id, $conn, $admin) {
    $sql = "INSERT INTO archived_feedback (name, email, subject, message, deleted_by)
            SELECT name, email, subject, message, '$admin' 
            FROM feedback 
            WHERE id = $id";

    if ($conn->query($sql) !== TRUE) {
        echo "Error archiving feedback: " . $conn->error;
    }
}

// Function to delete feedback by ID
function deleteFeedback($id, $conn) {
    $sql = "DELETE FROM feedback WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback deleted successfully";
    } else {
        echo "Error deleting feedback: " . $conn->error;
    }
}

// Check if delete button is clicked
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $admin_name = "Admin"; // Replace with the actual admin name or session variable
    archiveFeedback($delete_id, $conn, $admin_name); // Archive feedback before deleting
    deleteFeedback($delete_id, $conn); // Delete the feedback
}

// Query database to fetch all feedback items
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Your CSS styles here -->
    <style>
        body {
            background-image: url('images/bg_4.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
            font-family: sans-serif;
            font-size: medium;
        }
        h1{
            color: white;
            text-align: center;
            font-family: sans-serif;
        }

        p{
            text-align: justify;
        }

        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #cb0707;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

         .feedback-container {
            padding: 30px;
            max-width: 1000px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.85); /* Light background for readability */
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); 
            max-width: 1000px; /* Adjust to make it smaller */
            background: rgba(255, 255, 255, 0.85);
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 10px;
        }
        .feedback-item {
            padding: 15px;
            border-bottom: 2px dashed black;
            position: relative;
        }
        .feedback-item:last-child {
            border-bottom: none; /* No border for last item */
        }

        .delete-button {
            padding: 8px 16px;
            background-color: #cb0707;
            color: white;
            border-radius: 4px;
            border: none;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h1>Feedback</h1>
    <div class="container">
    <div class="feedback-container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='feedback-item'>";
                echo "<h3>From: " . $row["name"] . "</h3>";
                echo "<p>Email: " . $row["email"] . "</p>";
                echo "<p>Subject: " . $row["subject"] . "</p>";
                echo "<p>Message: " . $row["message"] . "</p> <br>";
                echo "<a href='?delete_id=" . $row["id"] . "' class='delete-button'>Delete</a>";
                echo "</div>";
            }
        } else {
            echo "No feedback found.";
        }
        ?>
    </div>
     </div> <!-- End of small-content div -->
    </div>
    <a href="admin_approval.php" class="back-button">Back</a>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
