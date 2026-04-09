<?php
require "classes/calc.php";

$operator = $_POST['operator'] ?? '';
$num1 = $_POST['num1'] ?? 0;
$num2 = $_POST['num2'] ?? 0;    

$calc = new Calc($operator, (float)$num1, (float)$num2);

try{
    echo $calc->calc();
}catch(TypeError $e) {
    echo "Error: " . $e->getMessage();
}




