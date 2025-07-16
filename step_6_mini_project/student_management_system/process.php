<?php
require_once 'Student.php';
require_once 'Teacher.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$type = $_POST['type'] ?? '';

$errors = [];

// Common validation
if (empty($name)) {
    $errors[] = "enter your name";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "enter a valid email";
}

if ($type === 'student') {
    $roll = $_POST['roll'] ?? '';
    $gpa = $_POST['gpa'] ?? '';

    if ($roll < 1) {
        $errors[] = "roll number is not valid";
    }

    if (!is_numeric($gpa) || $gpa < 0 || $gpa > 4.0) {
        $errors[] = "GPA must be 0 to 4.0 ";
    }

    if (empty($errors)) {
        $stu = new Student();
        $stu->setName($name);
        $stu->setEmail($email);
        $stu->setRoll($roll);
        $stu->setGpa($gpa);

        echo "<h3>🎓 Student Information</h3>";
        $stu->showStudentInfo();
    }

} elseif ($type === 'teacher') {
    $subject = $_POST['subject'] ?? '';
    $salary = $_POST['salary'] ?? '';

    if (empty($subject)) {
        $errors[] = "enter your subject.";
    }

    if (!is_numeric($salary) || $salary < 0) {
        $errors[] = "salary must be greater than 0";
    }

    if (empty($errors)) {
        $teacher = new Teacher();
        $teacher->setName($name);
        $teacher->setEmail($email);
        $teacher->setSubject($subject);
        $teacher->setSalary($salary);

        echo "<h3>👨‍🏫 Teacher Information</h3>";
        $teacher->showTeacherInfo();
    }

} else {
    $errors[] = "type is not valid ";
}

// Show errors
if (!empty($errors)) {
    echo "<h3>❌ Correct the invalid entity:</h3><ul>";
    foreach ($errors as $err) {
        echo "<li>⚠️ $err</li>";
    }
    echo "</ul><br><a href='form.html'>🔙 back</a>";
}
?>
