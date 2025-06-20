
<?php

# user-define function:

#normal function:
function myFunc(){
    $x = 10;
    $y = 20;
    return $x + $y;
};

 function paraFunc($x,$y){
    
    return $x + $y;
}

# Recursive Function 

function factorialNum($n){
    if($n <=1){
        return 1;
    }else{
        return $n * factorialNum($n-1);
    }
}
echo factorialNum(5);
// echo myFunc();
echo "<br>";
// echo paraFunc(10,20);
#built-in function:
$arr2 = array("shiba","parasitamal");
$name = "Parasitamal";

#array_push method: 

$newArr = array_push($arr2,"ariyan");
// echo $newArr;

for ($i=0; $i < $newArr; $i++) { 
    echo $arr2[$i]."<br>";
};

#in_array method:

if(in_array("shiba",$arr2)){
    echo "Found it <br>";
}else{
    echo "Not Found <br>";
};

$length = strlen($name);
$lowercase = strtolower($name);
$uppercase = strtoupper($name);
$replaced = str_replace("P","L",$name);

// echo $replaced;
// echo $uppercase;
// echo date("Y-m-d");
// echo date("d-m-Y");

?>