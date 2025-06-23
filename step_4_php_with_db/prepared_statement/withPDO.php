<?php
$servername = "localhost";
$dbname = "mysql_db1";
$username = "root";
$password = "";

try {
    // Database connection
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare Statement
    $stmt = $con->prepare("SELECT * FROM users WHERE username = :username AND password = :password");

    // Bind Parameters
    $stmt->bindParam(':username', $usernameInput);
    $stmt->bindParam(':password', $passwordInput);

    // Input from User
    if(isset($_POST['submit'])){
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];
    }

    // Execute Statement
    $stmt->execute();

    // Check result
    if ($stmt->rowCount() > 0) {
        echo "Login Successful!";
    } else {
        echo "Invalid Credentials!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>



<form action="with_mysqli.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="enter your username">
    <br> <br>
    <label for="password">Username</label>
    <input type="password" name="password" id="password" placeholder="enter your password">
    <input type="submit" value="submit" name="submit">
</form>