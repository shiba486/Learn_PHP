<?php
include "connect_db.php";
$id = $_GET['id'];
echo $id;

$qeury = "SELECT * FROM user_info WHERE id = '$id'";
$data = mysqli_query($conn,$qeury);
$row = mysqli_fetch_array($data);

?>

    <form action="update.php?id=<?php echo $id; ?>" method="post">

        <label for="username">Username: </label>
        <input value="<?php echo $row['username']?>" type="text" name="username" id="username" placeholder="Enter your username" ><br><br>

        <label for="email">Email: </label>
        <input  type="email" name="email" id="email" placeholder="Enter your email" value="<?php echo $row['email']?>"><br><br>

        <label for="password">Password: </label>
        <input value="<?php echo $row['password']?>" type="password" name="password" id="password" placeholder="Enter your password" ><br><br>

        <label for="age">Age: </label>
        <input value="<?php echo $row['age']?>" type="number" name="age" id="age" placeholder="Enter your age" ><br><br>

        <label for="location">Location: </label>
        <input value="<?php echo $row['location']?>" type="text" name="location" id="location" placeholder="Enter your location" ><br><br>

        <input type="submit" name="update_btn" value="Update">
        <a href ="./view.php">Back</a>

    </form>

 <?php 

if(isset($_POST['update_btn'])){
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $location = $_POST['location'];

    $update_query = "UPDATE user_info SET username='$username',email='$email',password='$password',age='$age',location='$location' WHERE id='$id'";

    $data = mysqli_query($conn, $update_query);
    if($data){
        ?>
        <script>
            alert("Data Updated Successfully");
            window.open("http://localhost/learn_PHP/step_4_php_with_db/view.php","_self");
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