<?php
// Database connection
include 'db.php';

// Handle form submission to update status
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the inputs
    $recipe_id = filter_input(INPUT_POST, "recipe_id", FILTER_SANITIZE_NUMBER_INT);
    $status = filter_input(INPUT_POST, "status", FILTER_SANITIZE_STRING);

    // Update the status of the recipe in the database
    $sql = "UPDATE coffee_items SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $recipe_id);

    if ($stmt->execute()) {
        // Redirect with success message and status
        $message = "Status updated successfully.";
        header("Location: admin_approval.php?message=" . urlencode($message) . "&status=" . urlencode($status));
        exit;
    } else {
        // Redirect with error message
        $message = "Error updating status: " . $conn->error;
        header("Location: admin_approval.php?message=" . urlencode($message));
        exit;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect if accessed without POST request
    header("Location: admin_approval.php");
    exit;
}
?>
