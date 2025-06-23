<?php

include "connect_db.php";

if(isset($_POST['save_btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $location = $_POST['location'];

    $query = "INSERT INTO user_info (username,email,password,age,location) Values('$username','$email','$password','$age','$location')";

    $data = mysqli_query($conn, $query);
    if($data){
        ?>
        <script>
            alert("Data insert Successfully");
        </script>
        <?php
    }else{
         ?>
          <script>
            alert("Try Again Please!");
        </script>
         <?php
    }

}


?>

    
    <form action="./create.php" method="post">

        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Enter your username" ><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" ><br><br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" placeholder="Enter your password" ><br><br>

        <label for="age">Age: </label>
        <input type="number" name="age" id="age" placeholder="Enter your age" ><br><br>

        <label for="location">Location: </label>
        <input type="text" name="location" id="location" placeholder="Enter your location" ><br><br>

        <input type="submit" name="save_btn" value="Sign Up">
        <a href ="./view.php">View</a>

    </form>