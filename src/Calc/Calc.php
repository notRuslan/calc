<?php


namespace Lara\MyCalc\Calc;


use Lara\MyCalc\Calc\Contracts\CalcInterface;
use Lara\MyCalc\Calc\Operation\Operation;


class Calc implements  CalcInterface
{

    public function calc(float $v1, Operation $op, float $v2): float
    {
        return config('mycalc.constant') *  $op->exec($v1, $v2);
    }
}