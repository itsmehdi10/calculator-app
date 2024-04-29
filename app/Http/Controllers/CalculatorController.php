<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Calculator;

class CalculatorController extends Controller
{

    public function index(){
        return view('calculator');
    }
}
