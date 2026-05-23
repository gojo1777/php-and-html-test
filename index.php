<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="POST">

    <input type="number" name="num1" required>

    <input type="number" name="num2" required>

    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <button type="submit">Calculate</button>

</form>

<?php

require 'calculator.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    echo "<h3>Answer: ";

    switch($operator){

        case "+":
            echo add($num1, $num2);
            break;

        case "-":
            echo subtract($num1, $num2);
            break;

        case "*":
            echo multiply($num1, $num2);
            break;

        case "/":
            echo divide($num1, $num2);
            break;
    }

    echo "</h3>";
}

?>

</body>
</html>
