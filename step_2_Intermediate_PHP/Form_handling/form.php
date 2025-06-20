<?php

print_r($_POST);
echo "<br/>";

if(isset($_POST['username'])){
    echo "<br/>";
    echo "Username is ".$_POST['username']."<br/> <br/>";
    echo "Email is ".$_POST['email']."<br/> <br/>";
    echo "Password is ".$_POST['password']."<br/> <br/>";
    echo "Skill are ".implode(" ,",$_POST['skill'])."<br/> <br/>";
    echo "Gender is ".$_POST['gender']."<br/> <br/>";
    echo "City is ".$_POST['city']."<br/> <br/>";
    echo "Bio is ".$_POST['bio']."<br/> <br/>";
}

?>