<?php


namespace Lara\MyCalc\Calc\Contracts;

use Lara\MyCalc\Calc\Operation\Operation;

interface CalcInterface
{
    public function calc(float $v1, Operation $op ,float $v2): float;
}