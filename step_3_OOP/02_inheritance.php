<?php


class man{
    private $name;
    public $age;

    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function info(){
        
        return $this->name." is ".$this->age;
    }
}

class userInfo extends man{
    public $address;
    function __construct($name,$age,$address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    function info_detail(){
        return $this->address;
    }
}

$user1 = new userInfo("shiba",21,"Dhaka");
echo $user1->info_detail();








?>