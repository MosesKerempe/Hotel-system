<?php
include 'connection.php'; 

$sql = "SELECT * FROM rooms WHERE availability = TRUE";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <script src="script.js"></script>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
}

nav {
    background-color: #333;
    overflow: hidden;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    float: left;
}

nav ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: #111;
}

.container {
    padding: 20px;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    margin: 10px 0;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: white;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

form {
    display: flex;
    flex-direction: column;
}

form label {
    margin: 5px 0;
}

form input {
    margin: 5px 0 15px 0;
    padding: 10px;
    font-size: 16px;
}

form button {
    padding: 10px;
    font-size: 16px;
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #555;
}

</style>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li style="float:right"><a href="#" onclick="showSignUpForm()">Sign Up</a></li>
                <li style="float:right"><a href="#" onclick="showLoginForm()">Login</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <h1>Available Rooms</h1>
        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
                <li>
                    <h2><?php echo htmlspecialchars($row['room_type']); ?></h2>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <p>Price per night: $<?php echo htmlspecialchars($row['price_per_night']); ?></p>
                    <a href="bookings.php?room_id=<?php echo $row['room_id']; ?>">Book Now</a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <!-- Sign Up Form -->
    <div id="signUpForm" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeSignUpForm()">&times;</span>
            <form id="signUp" action="signup.php" method="post">
                <h2>Sign Up</h2>
                <label for="name">Username:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- Login Form -->
    <div id="loginForm" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginForm()">&times;</span>
            <form id="login" action="login.php" method="post">
                <h2>Login</h2>
                <label for="name">Username:</label>
                <input type="text" id="nameLogin" name="name" required>
                <label for="password">Password:</label>
                <input type="password" id="passwordLogin" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 Room Booking System. All rights reserved.</p>
    </footer>
</body>
</html>