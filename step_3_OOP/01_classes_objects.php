<?php

#class:
class main{
    public $name;
    public $age;
    public $address;

    function info($username,$age,$address){
       
        $this->name = $username;
        $this->age = $age;
        $this->address = $address;

        return "Name: ".$this->name." Age: ".$this->age." & Address: ".$this->address;
    }
}

#object:
$user1 = new main();
// $user1->name = "shibanondo";
echo $user1->info("parasitamal",21,"Dhaka");

echo "<br/>";

$user2 = new main();
echo $user2->info("shiba",22,"Mymensingh");





?>