<?php 

$server_name = "localhost";
$username = "root";
$dbname = "mysql_db1";
$password = "";

$connection_db = mysqli_connect($server_name,$username,$password,$dbname);
if(!$connection_db){
    die("db connection failed");
}


$query = "INSERT INTO test(username,email) VALUES ('abc2','abc32@gmail.com')";
$data = mysqli_query($connection_db,$query);
if(!$data){
    die("data not inserted.");
}



?>