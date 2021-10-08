<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Algorithm;

class AlgorithmController extends Controller
{
    
    public function factorial($num, Algorithm $algo)
    { 
        $this->validateInt($num);
        $data = $algo->getFactorial($num);
        
        return response()->json($data, 200);
    }

    public function questionMarks()
    {   
                
        return view('index');
    }
    
    public function checkQuestionMarks(Request $request, Algorithm $algo)
    {   
        $str = $request["strData"];
        $this->validateInt($str);
        $data = $algo->getQuestionMarks($str);
        
        return response()->json($data, 200);
    }

    public function getPrimeNumbersTo($num, Algorithm $algo)
    { 
        $this->validateInt($num);   
        $data = $algo->primeNumbersTo($num);
        
        return response()->json($data, 200);
    }

    public function validateInt($num)
    {
        if(!((int)$num > 0))
        {
            $msg = ["message" => "Error! Invalid data given."];
            return response()->json($msg, 422);
        }  
    }

    public function validateStr($str)
    {
        if(!(strlen($str) > 1))
        {
            $msg = ["message" => "Error! Invalid data given."];
            return response()->json($msg, 422);
        }  
    }
}
