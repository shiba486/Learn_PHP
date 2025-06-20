<?php

$arr1 = array("shiba","ariyan","parasitamal","bishnu","krishna","Aish");

#for loop:
for ($index=0; $index < count($arr1); $index++) { 
    echo $arr1[$index]."<br>";
};
echo "<br>";
for($x=1; $x<=10; $x++){
    if($x == 4){
        break;
    };
    echo $x."<br>";
}

echo "<br>";
for($x=1; $x <= 10; $x++){
    if($x == 4){
        continue;
    };
    echo $x."<br>";
};

echo "<br>";



echo "<br>";

#while loop:
$x = 0;
while ($x < count($arr1)) {
    echo $arr1[$x]."<br>";
    $x++;
};

echo "<br>";

#do-while loop:
$index = 0;
do{
    echo $arr1[$index]."<br>";
    $index++;
}while($index < count($arr1));

echo "<br>";
$fruits = array("Apple", "Banana", "Mango");

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}
echo "<br>";

#foreach loop:
    foreach ($arr1 as $key => $value) {
        echo $key.". ".$value."<br>";
    };
    
echo "<br>";

$person = array("name" => "shiba", "age" => 21, "city" => "Dhaka");

foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}
?>