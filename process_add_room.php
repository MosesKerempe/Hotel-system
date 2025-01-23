<?php
include 'admin_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_type = $_POST['room_type'];
    $description = $_POST['description'];
    $price_per_night = $_POST['price_per_night'];
    $availability = $_POST['availability'];
    
    $sql = "INSERT INTO rooms (room_type, description, price_per_night, availability) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $room_type, $description, $price_per_night, $availability);
    
    if ($stmt->execute()) {
        echo "Room added successfully.";
    } else {
        echo "Error adding room:"; 
    }
}
