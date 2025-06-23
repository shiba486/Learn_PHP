<?php
$servername = "localhost";
$dbname = "mysql_db1";
$username = "root";
$password = "";

// Database Connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare Statement
$stmt = $con->prepare("SELECT * FROM users WHERE username = ? AND password = ?");

// Bind Parameters
$stmt->bind_param("ss", $usernameInput, $passwordInput);

// Input from User
if(isset($_POST['submit'])){
$usernameInput = $_POST['username'];
$passwordInput = $_POST['password'];
}

// Execute Statement
$stmt->execute();

// Get Result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login Successful!";
} else {
    echo "Invalid Credentials!";
}

$stmt->close();
$con->close();
?>

<form action="with_mysqli.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="enter your username">
    <br> <br>
    <label for="password">Username</label>
    <input type="password" name="password" id="password" placeholder="enter your password">
    <input type="submit" value="submit" name="submit">
</form>