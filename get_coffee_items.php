<?php
include 'db.php';

$sql = "SELECT * FROM coffee_items";
$result = $conn->query($sql);

$coffee_items = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $coffee_items[] = $row;
    }
}

echo json_encode($coffee_items);

$conn->close();
?>
