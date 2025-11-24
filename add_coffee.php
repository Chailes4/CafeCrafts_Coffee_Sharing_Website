<?php
// Start session (if not already started)
session_start();

// Database connection
include 'db.php';

// Check if the user is logged in
if(isset($_SESSION['firstname'])) {
    // User is logged in, retrieve user information from session
    $user_id = $_SESSION['firstname']; // Assuming you store user ID in the session
    // Retrieve other user information if needed (e.g., username)

    // Form submission handling
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve recipe details from the form
        $name = mysqli_real_escape_string($conn, $_POST['name']); // Escape special characters
        $coffeecateg = $_POST['coffeecateg']; 
        $description = mysqli_real_escape_string($conn, $_POST['description']); // Escape special characters
        $category = $_POST['category'];
        $image_url = "images/" . $_FILES["image"]["name"];
        $ingredients = $_POST['ingredients']; // Escape special characters
        $preparation_time_value = $_POST['preparation_time_value'];
        $preparation_time_unit = $_POST['preparation_time_unit'];
        $cook_time_value = $_POST['cook_time_value'];
        $cook_time_unit = $_POST['cook_time_unit'];
        $servings = $_POST['servings'];
        $steps = array();

        // Construct steps array
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'step') === 0 && !empty($value)) {
                $steps[] = mysqli_real_escape_string($conn, $value);
            }
        }

        // Upload image
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_url);

        // Set recipe status to pending
        $status = "pending";

        // Insert coffee item into the database along with user information and status
        $sql = "INSERT INTO coffee_items (name, coffeecateg, description, category, image_url, preparation_time_value, preparation_time_unit, cook_time_value, cook_time_unit, servings, added_by, status) 
        VALUES ('$name', '$coffeecateg', '$description', '$category', '$image_url','$preparation_time_value', '$preparation_time_unit', '$cook_time_value', '$cook_time_unit', '$servings', '$user_id', '$status')";

        if ($conn->query($sql) === TRUE) {
            $coffee_id = $conn->insert_id; // Get the ID of the inserted coffee item

            // Insert ingredients into the database
            foreach ($ingredients as $ingredient) {
                $ingredient = mysqli_real_escape_string($conn, $ingredient);
                $sql = "INSERT INTO ingredients (coffee_id, ingredient) VALUES ('$coffee_id', '$ingredient')";
                $conn->query($sql);
            }

            // Insert steps into the database
            foreach ($steps as $step) {
                $step = mysqli_real_escape_string($conn, $step);
                $sql = "INSERT INTO directions (coffee_id, step) VALUES ('$coffee_id', '$step')";
                $conn->query($sql);
            }

           header("Location: add_recipe.php?success=1"); 
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    // User is not logged in, redirect to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit(); // Stop further execution
}

// Close the database connection
$conn->close();
?>