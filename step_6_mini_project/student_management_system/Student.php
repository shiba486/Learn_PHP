<?php
require_once 'Person.php';

class Student extends Person {
    private $roll;
    private $gpa;

    public function setRoll($roll) {
        $this->roll = $roll;
    }
    public function getRoll() {
        return $this->roll;
    }

    public function setGpa($gpa) {
        if ($gpa >= 0 && $gpa <= 4.0) {
            $this->gpa = $gpa;
        }
    }
    public function getGpa() {
        return $this->gpa;
    }

    public function showStudentInfo() {
        $this->showBasicInfo();
        echo "🆔 roll: $this->roll<br>";
        echo "📊 GPA: $this->gpa<br><br>";
    }
}
?>

