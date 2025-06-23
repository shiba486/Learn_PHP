<?php
$servername = "localhost";
$dbname = "mysql_db1";
$username = "root";
$password = "";

try {
    // PDO connection
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Enable error mode
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert Query
    $query = "INSERT INTO test(username, email) VALUES ('abc21', 'abc32@gmail.com')";

    // Prepare and execute
    $stmt = $con->prepare($query);
    $stmt->execute();

    echo "Data inserted successfully";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
