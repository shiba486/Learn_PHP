<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("db connection failed");
}

?>