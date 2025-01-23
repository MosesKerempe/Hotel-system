<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $room_id = $_GET['room_id'];
    
    // Fetch room details
    $sql = "SELECT * FROM rooms WHERE room_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $room = $stmt->get_result()->fetch_assoc();
}
if(isset($_POST["submit"])){
    header("location:pay.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Book Room</h1>
    <form action="pay.php" method="post">
        <input type="hidden" name="room_id" value="<?php echo htmlspecialchars($room['room_id']); ?>">
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="check_in">Check-in Date:</label>
        <input type="date" id="check_in" name="check_in" required>
        
        <label for="check_out">Check-out Date:</label>
        <input type="date" id="check_out" name="check_out" required>
        
        <button type="submit" name="submit">Proceed to Payment</button>
    </form>
</body>
</html>
