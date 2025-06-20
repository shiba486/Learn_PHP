<?php
class Student {
    // Properties are encapsulated (private)
    private $name;
    private $age;

    // Setter method (to set value)
    public function setName($name) {
        $this->name = $name;
    }

    // Getter method (to get value)
    public function getName() {
        return $this->name;
    }

    // Setter method for age
    public function setAge($age) {
        if ($age >= 0) { // data validation
            $this->age = $age;
        } else {
            echo "Age cannot be negative!";
        }
    }

    // Getter method for age
    public function getAge() {
        return $this->age;
    }
}

// Create object
$student1 = new Student();
$student1->setName("Shibanondo Das");
$student1->setAge(22);

// Access data safely
echo "Student Name: " . $student1->getName() . "<br>";
echo "Student Age: " . $student1->getAge();
?>
