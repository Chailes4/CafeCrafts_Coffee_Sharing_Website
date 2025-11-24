<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Crafts | Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/bg_4.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
            color: white; 
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: white;
        }

        .content {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .small-content {
            max-width: 1000px; /* Adjust to make it smaller */
            background: rgba(255, 255, 255, 0.85);
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
        }


        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            color: #333; 
        }

        h3 {
            margin-top: 0;
            color: #333;
        }

        p {
            margin: 5px 0;
            color: #333;
        }

        select, input[type="submit"] {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            background-color: #4CAF50;
        }

        select {
            background: #d1d1d1;
        }

        .feedback-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            z-index: 9999;
            text-decoration: none;
        }

        .logout-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #cb0707;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            z-index: 9999;
            text-decoration: none;
        }

        .approve {
            background-color: #4CAF50;
            color: white;
        }

        .reject {
            background-color: #f44336;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Admin</h1>
    <div class="container">
        <div class="small-content"> 
    <form action="update_status.php" method="post">
        <ul>
            <?php
            // Include database connection
            include 'db.php';

            // Query database to fetch pending recipes
            $sql = "SELECT * FROM coffee_items WHERE status = 'pending'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $counter = 0; // Initialize a counter for unique form identifiers
                while($row = $result->fetch_assoc()) {
                    $counter++;
                    echo "<li>";
                    echo "<h3>" . $row["name"] . "</h3>";
                    echo "<p>Type of Coffee: " . $row["coffeecateg"] . "</p>";
                    echo "<p>Description: " . $row["description"] . "</p>";
                    echo "<p>Category: " . $row["category"] . "</p>";
                    echo "<p>Preparation Time: " . $row["preparation_time_value"] .  ' ' . $row['preparation_time_unit']; "</p>";
                    echo "<p>Cook Time: " . $row["cook_time_value"] . ' ' . $row['cook_time_unit']; "</p>";
                    echo "<p>Servings: " . $row["servings"] . "</p> <br>";
                    echo "<p>Ingredients:</p>";
                    // Retrieve ingredients for the current recipe
                    $recipe_id = $row["id"];
                    $ingredients_sql = "SELECT * FROM ingredients WHERE coffee_id = $recipe_id";
                    $ingredients_result = $conn->query($ingredients_sql);
                    if ($ingredients_result->num_rows > 0) {
                        echo "<ul>";
                        while ($ingredient_row = $ingredients_result->fetch_assoc()) {
                            echo "<li>" . $ingredient_row["ingredient"] . "</li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "No ingredients found";
                    }
                    echo "<p>Steps:</p>";
                    // Retrieve steps for the current recipe
                    $steps_sql = "SELECT * FROM directions WHERE coffee_id = $recipe_id";
                    $steps_result = $conn->query($steps_sql);
                    if ($steps_result->num_rows > 0) {
                        echo "<ol>";
                        while ($step_row = $steps_result->fetch_assoc()) {
                            echo "<li>" . $step_row["step"] . "</li>";
                        }
                        echo "</ol>";
                    } else {
                        echo "No steps found";
                    }
                    echo "<form action='update_status.php' method='post' class='status-form'>"; // Added a class for JavaScript reference
                    echo "<input type='hidden' name='recipe_id' value='" . $row["id"] . "'>";
                    echo "<select name='status'>";
                    echo "<option value='approved'>Approve</option>";
                    echo "<option value='rejected'>Reject</option>";
                    echo "</select>";
                    echo "<input type='submit' value='Update Status' class='btn-submit'>"; // Added class for styling and reference
                    echo "</form>";
                    echo "</li>";
                }
            } else {
                echo "<li>No pending recipes.</li>";
            }

            $conn->close();
            ?>
        </ul>
    </form>
    </div>
    </div> 

    <a href="admin_feedback.php" class="feedback-button">Feedback</a>
    <a href="index.php" class="logout-button">Logout</a>

</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var params = new URLSearchParams(window.location.search); // Get query parameters from the URL
    var message = params.get("message"); // Retrieve the message
    var status = params.get("status"); // Retrieve the status

    if (message) {
        var alertMessage = message; // Default alert message

        // Customize alert based on status
        if (status) {
            if (status === "approved") {
                alertMessage = "Recipe has been approved!";
            } else if (status === "rejected") {
                alertMessage = "Recipe has been rejected.";
            }
        }

        alert(alertMessage); // Display the alert with the appropriate message
    }
});
</script>
