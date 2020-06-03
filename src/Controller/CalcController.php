<?php


namespace Lara\MyCalc\Controller;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Lara\MyCalc\Calc\Contracts\CalcInterface;
use Lara\MyCalc\Calc\OpResolver;
use function Couchbase\defaultDecoder;

class CalcController extends Controller
{
    public function index()
    {
        return view('mycalc::calc');
}

    public function calc(Request $request, CalcInterface $calc)
    {
        $v1 = floatval($request->v1);
        $v2 = floatval($request->v2);
        $op = OpResolver::resolve($request->op);
        return $calc->calc($v1, $op, $v2);
}

}

