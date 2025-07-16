<?php
require_once 'Person.php';

class Teacher extends Person {
    private $subject;
    private $salary;

    public function setSubject($subject) {
        $this->subject = $subject;
    }
    public function getSubject() {
        return $this->subject;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        }
    }
    public function getSalary() {
        return $this->salary;
    }

    public function showTeacherInfo() {
        $this->showBasicInfo();
        echo "📘 subject: $this->subject<br>";
        echo "💰 salary: $this->salary tk<br><br>";
    }
}
?>
