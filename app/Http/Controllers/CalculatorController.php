<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Calculator;

class CalculatorController extends Controller
{
    protected $calculator;
    public function __construct(Calculator $calculator){
        $this->calculator = $calculator;
    }
    public function index(){
        return view('calculator');
    }

    public function calculate(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operator');
        try {
            $this->calculator->setNumber($num1, $num2);
            $this->calculator->setOperator($operator);
            $result = $this->calculator->calculate();
            return view('result', compact('result'));
        } catch (\Throwable $th) {
            return view('result')->with("error", $th->getMessage());
        }
    }
}
