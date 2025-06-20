<?php

#  Arrays (Indexed, Associative, Multidimensional)

#Indexed Array: 
$names1 = array("Arian", "Shiba", "Krishna");
$names2 = ["Arian", "Shiba", "Bishnu"];

// echo $names1[1];


#Associative Array:
$student_list_one = array("name" => "Shiba", "age" => 21, "grade" => "A");
$student_list_two = ["name" => "Shiba", "age" => 21, "grade" => "A"];

// echo $student_list_one['age'];
// echo var_dump($student_list_one['age']);

#Multidimensional Array: 
$students = [
    ["Arian", 21, "A"],
    ["Shiba", 20, "B"],
    ["Roy", 22, "A+"]
];

// echo $students[0][0];
// echo $students[1][1];
// echo $students[2][2];

#loop in multidimensional array: 
foreach ($students as $student) {
    foreach ($student as $data) {
        echo $data . " ";
    }
    echo "<br>";
}

echo "<br>";

#Associative-Multidimensional Array:
$students_list = [
    "student1" => ["name" => "Arian", "age" => 21, "grade" => "A"],
    "student2" => ["name" => "Shiba", "age" => 20, "grade" => "B"],
];

// echo $students_list["student1"]["name"]; 
// echo $students_list["student2"]["grade"]; 

#loop in Associative-multidimensional array:
foreach ($students_list as $key => $student) {
    echo "$key: <br>";
    foreach ($student as $property => $value) {
        echo "$property : $value <br>";
    }
    echo "<br>";
}






?>