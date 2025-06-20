<?php

abstract class parent_Class{
        public $name;

        public function __construct($username){
            $this->name = $username;
        }

        abstract public function php_class();
    }


class child_Class extends parent_Class{
    public function php_class(){
        echo "Thank you for your help ".$this->name;
    }
}


$child1 = new child_Class("shiba");
$child1->php_class();


?>