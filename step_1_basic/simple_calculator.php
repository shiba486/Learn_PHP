<?php
// checking user-input:
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    
    // Input:
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Calculation:
    switch ($operation) {
        case ($operation == "+"):
            $result = $num1 + $num2;
            echo "Result: $num1 + $num2 = $result";
            break;

        case ($operation == "-"):
            $result = $num1 - $num2;
            echo "Result: $num1 - $num2 = $result";
            break;

        case ($operation == "*"):
            $result = $num1 * $num2;
            echo "Result: $num1 × $num2 = $result";
            break;

        case ($operation == "/"):
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result: $num1 ÷ $num2 = $result";
            } else {
                echo "Cannot be divided (division by zero is not allowed).<br>";
            }
            break;

        default:
            echo "Invalid operation selected.<br>";
    }

} else {
    echo "Please provide num1, num2, and operation.<br><br>";
}
?>

<form action="simple_calculator.php" method="POST">
    Number1: <input type="text" name="num1"><br><br><br>
    Number2: <input type="text" name="num2"><br><br><br>
    Operation: <input type="text" name="operation"><br><br><br>
    <input type="submit" value="Submit"><br>
</form>
