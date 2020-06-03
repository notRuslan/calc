<?php


namespace Lara\MyCalc;


use Lara\MyCalc\Calc\Calc;
use Lara\MyCalc\Calc\Contracts\CalcInterface;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind(CalcInterface::class , Calc::class);
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/mycalc.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'mycalc');

        $this->publishes([
            __DIR__ . '/../config/mycalc.php' => config_path('mycalc.php')
        ], 'mycalc-config'); // 'mycalc-config' - additional tag

        $this->mergeConfigFrom(__DIR__ . '/../config/mycalc.php', 'mycalc');

}
}
