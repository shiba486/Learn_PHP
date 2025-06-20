<?php

interface parent_Class{
        
         public function php_class();
    }


class child_Class implements parent_Class{
    public function php_class(){
        echo "Thank you for your help";
    }
}


$child1 = new child_Class("shiba");
$child1->php_class();


?>