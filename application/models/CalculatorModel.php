<?php

namespace models;

class CalculatorModel
{
    private $op1;
    private $op2;
    private $result;

    public function __construct($op1, $op2)
    {
        $this->op1= $op1;
        $this->op2= $op2;
    }


    public function sum()
    {
        $this->result= $this->op1 + $this->op2;
    }

    public function subtract()
    {
        $this->result= $this->op1 - $this->op2;
    }

    public function multiply()
    {
        $this->result= $this->op1 * $this->op2;
    }

    public function division()
    {
        $this->result= $this->op1 / $this->op2;
    }

    public function getResult()
    {
        return $this->result;
    }


}