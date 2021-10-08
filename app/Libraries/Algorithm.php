<?php
namespace App\Libraries;

class Algorithm 
{
    
    public function getFactorial($num)
    {
        $fact_num = 1;
        $n = $num;
        
        for($i=1; $i<=$n; $i++)
        {
            $fact_num = $fact_num * $num;
            $num--;
        }
        return $fact_num;
    }

    public function getQuestionMarks($str)
    { 
        $output = "false";      
        $arr = str_split($str);        
        
        for($i=0; $i<count($arr); $i++) 
        {
            if(is_numeric($arr[$i])) 
            {
                $count = 0;
                $num1 = intval($arr[$i]);
                $i++;
                
                for($j=$i; $j<count($arr); $j++)
                {
                    $cur_pos = $arr[$j];
                    if($cur_pos === "?") 
                    {
                        $count++;
                    }
                    if(is_numeric($cur_pos))
                    {                   
                        if($num1 + intval($cur_pos) == 10)
                        {                       
                            if($count == 3) 
                            {
                               $output = "true";
                            } 
                            else
                            {
                                return "false";
                            } 
                        }
                      
                    }
                }
            }
        }
        return $output;
    }

    public function primeNumbersTo($num)
    {
        $result = "";
        for($i=2; $i<=$num; $i++)
        {
            $data = $this->primeCheck($i);
            if($data <> "false"){
                $result .= $data . ",";
            }
        }
        return substr($result,0,-1);
    }

    public function primeCheck($num)
    {
        $i = 2;
        while($i <= ($num/2))
        {
            if( $num % $i == 0)
            {
                return "false";
            } 
            $i++;
        }
        
        return $num;
    }
}