<?php


namespace Lara\MyCalc\Calc\Operation;


abstract class Operation
{
    public abstract function exec(float  $v1, float  $v2): float ;

}