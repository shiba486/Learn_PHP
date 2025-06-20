<?php

class main{
    public $username;
    public $age;
    public $address;

    function __construct($name,$age,$address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    function __destruct(){
        echo $this->name. " is ".$this->age." old and lived in ".$this->address;
    }
}

$user1 = new main("shiba",21,"Dhaka")


?>