<?php


class main{
    public $name;
    public $age;
    public $address;

    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;

        echo $this->name." is ".$this->age." years old.";
        }
}

$user1 = new main("shiba",21);






?>