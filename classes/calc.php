<?php

class Calc{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, float $num1, float $num2) {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calc() {
      
    switch($this->operator) {

     case "+":
        return $this->num1 + $this->num2;

     case "-":
        return $this->num1 - $this->num2;

     case "*":
        return $this->num1 * $this->num2;

    case "/":
        if($this->num2 == 0) {
            return "Error: Division by zero";
        }
        return $this->num1 / $this->num2;

     default:
        return "Invalid operator";
    }


}
}