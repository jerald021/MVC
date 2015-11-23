<?php

namespace controllers;
use models\CalculatorModel;
require 'application/models/CalculatorModel.php';

class CalculatorController
{
    public function sumAction()
    {
        $action = 'doSum';
        require 'application/views/form.phtml';
    }

    public function doSumAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->sum();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function subtractAction()
    {
        $action = 'doSubtract';
        require 'application/views/form.phtml';
    }

    public function doSubtractAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->subtract();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function multiplyAction()
    {
        $action = 'doMultiply';
        require 'application/views/form.phtml';
    }
    public function doMultiplyAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->multiply();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function divisionAction()
    {
        $action= "doDivision";
        require "application/views/form.phtml";
    }

    public function doDivisionAction()
    {
        $model= new CalculatorModel($_POST["op1"], $_POST["op2"]);
        $model->division();
        $result= $model->getResult();
        require "application/views/result.phtml";
    }


}

