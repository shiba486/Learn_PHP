<?php

$number1 = 5;

#custom error-handling:
class FiveException extends Exception{
    function errorMessage(){
        return $this-> getMessage();
    }
};

try{
    if($number1 <= 0){
        throw new Exception("Enter a valid Number!");
    }
    if($number1==5){
        throw new FiveException("Number is 5") 
    }
    
        echo $number1 / 2;


}catch(Exception $e){
    echo $e->getMessage();
    // echo $e->getLine();
    // echo $e->getCode();
    // echo $e->getFile();
}catch(FiveException $e){
    echo $e->getMessage();
}

?>