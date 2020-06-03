<?php


namespace Lara\MyCalc\Calc\Operation;
//use Lara\MyCalc\Calc\Operation;


class Addition extends Operation
{
    public  function exec(float  $v1, float  $v2): float {
        return $v1 + $v2;
    }

}