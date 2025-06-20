<?php

$name = "shibanondo das"; //string
$age = 17; //integer
$grade = "A+"; //string
$point = 5.00; //float
$isAccessable = true; //boolean
$newArray = array("shiba","ariyan","parasitamal"); //array

/*
echo var_dump($age);
echo var_dump($grade);
echo var_dump($point);
echo var_dump($isAccessable);
echo var_dump($newArray);
echo $name. "<br>";

echo "helo world"
*/


/*
operator:
arithmatic: +, -, * , /, %
assignment: =, +=,-+,*=,/=
comparision: ==,===, <, >, <=, >=, !=, !==
Increment & Decrement: ++variable,variable++,--variable,variable--,
logical: AND,&&, OR,||
string: ., .=
array: 
ternary: x==2 ? true :false 

*/ 
    $x = 20;
    $y = 10;

   
    /*
    //logical operator:

       if($x == 20 and $y == 10){
        echo "correct";
    }else{
        echo "incorrect";
    }
            if($x == 20 && $y == 10){
        echo "correct";
    }else{
        echo "incorrect";
    }

        if($x == 20 or $y == 11){
        echo "correct";
    }else{
        echo "incorrect";
    }
    
        if($x == 20 || $y == 11){
        echo "correct";
    }else{
        echo "incorrect";
    }

    */

    /*
    //increment and Decrement operator:
        //increment:
        echo ++$x;
        echo $x++;
        echo $x;
        //decrement:
        echo --$x;
        echo $x--;
        echo $x;
    */
/*
//comparission operator:
    //==, ===, !=, !==, <, <=, >, >=,
    if($x !== $y){
        echo "True";
    }else{
        echo "False";
    }
*/
 
//asignment operator:  
  /*  $x +=2;
    echo $x;
    echo "<br>";
    $x -=2;
    echo $x;
    echo "<br>";
    $x *=2;
    echo $x;
    echo "<br>";
    $x /=2;
    echo $x;
    echo "<br>";
    */

//arithmatic:
    /*
    echo $x+$y; echo "<br>";
    echo $x-$y; echo "<br>";
    echo $x*$y; echo "<br>";
    echo $x/$y; echo "<br>";
    echo $x%$y; echo "<br>";

    */

#this is also single line comment

    // echo "Hello World!<br>";
    // print "PHP is awesome! <br>";
    // print "My name is ". $name

#Conditional Statements (if, else, elseif, switch):
    /*
    $age = 111;

    if($age < 1 || $age > 100){
        echo "Something went wrong";
    }else if($age >= 18 and $age < 30){
        echo "Your are Adult";
    }else if($age >= 30 and $age < 50 ){
        echo "you are midd";
    
    }else if($age >= 51 and $age < 71 ){
        echo "you are old citizen";
    }else if($age < 18){
        echo "you are child";
    }else{
        echo "enter your valid age";
    }
        */




?>


<?php
$score = 75;

if ($score >= 90) {
    echo "A+ গ্রেড";
} else if ($score >= 80) {
    echo "A গ্রেড";
} else if ($score >= 70) {
    echo "B গ্রেড";
} else {
    echo "Fail";
}

echo "<br>";

$day = "Monday";

switch ($day) {
    case "Saturday":
        echo "Today is Saturday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    default:
        echo "আজ সপ্তাহের অন্য দিন।";
}


echo "<br>";
$number1 = 5;

if($number1 % 2 == 0){
    echo "The given number is Even";
}else{
    echo "The given number is Odd";

}

echo "<br>";

$student = "shiba";
$point = 40;
R
switch(true){
    case ($point >= 90):
        echo $student. " you got A+";
        break;
    case ($point >= 80):
        echo $student. " you got A";
        break;
    case ($point >= 70):
        echo $student. " you got A-";
        break;
    case ($point >= 60):
        echo $student. " you got B";
        break;
    case ($point >= 50):
        echo $student. " you got C";
        break;
    default:
        echo "Your are Fail ".$student;
}

echo "<br>";
echo "<br>";

?>


R












