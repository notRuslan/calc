<?php


namespace Lara\MyCalc\Calc\Operation;


class Subtraction extends Operation
{

    public function exec(float $v1, float $v2): float
    {
        return $v1 - $v2;
    }
}