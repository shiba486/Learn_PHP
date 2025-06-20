<?php

if(isset( $_POST['username']) and isset($_POST['email'])){
    if(empty($_POST['email']) and empty($_POST['username']) ){
        echo "Fill in the blank ";
    };
    $username = $_POST['username'];
    $email = $_POST['email'];

    // echo $username."<br>";
    // echo $_SERVER['PHP_SELF']."<br>";
    // echo $email;

    $file_name = $_SERVER['PHP_SELF'];
    $server_name = $_SERVER['SERVER_NAME'];
    $http_host = $_SERVER['HTTP_HOST'];
    $request_method = $_SERVER['REQUEST_METHOD'];

    // session_start();
    // $_SESSION['username'] = $_POST['username'];

    // echo $file_name;
    echo "Hello ".$username;
};


?>

<form method="post" action="superglobals.php">
    Name: <input type="text" name="username"><br><br>
    Email: <input type="text" name="email"><br><br><br>
    <input type="submit" value="Submit"><br>
</form>