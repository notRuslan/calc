<?php


namespace Lara\MyCalc\Calc;


use InvalidArgumentException;
use Lara\MyCalc\Calc\Operation\Multiply;
use Lara\MyCalc\Calc\Operation\Operation;
use Lara\MyCalc\Calc\Operation\Subtraction;
use Lara\MyCalc\Calc\Operation\Addition;

class OpResolver
{
    public static function resolve(string $op): Operation
    {
        switch ($op){
            case 'add': return new Addition();
            break;
            case 'sub': return new Subtraction();
            break;
            case 'mul': return new Multiply();
            break;
            default:
                throw new InvalidArgumentException("Wrong $op");

        }
}
}