<?php

namespace App\Classes;

class Calculator
{
    protected $num1;
    protected $num2;
    protected $operator;

    public function setNumber($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function setOperator($operator){
        $this->operator = $operator;
    }

    public function calculate(){

        switch ($this->operator) {
            case 'plus':
                return $this->num1 + $this->num2;
            case 'minus':
                return $this->num1 - $this->num2;
            case 'multiply':
                return $this->num1 * $this->num2;
            case 'divide':
                return $this->num1 / $this->num2;
            default:
                throw new \InvalidArgumentException("Invalid operator");
        }
    }
}
