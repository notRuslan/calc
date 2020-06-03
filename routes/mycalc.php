<?php

use Illuminate\Support\Facades\Route;
use Lara\MyCalc\Controller\CalcController;

Route::get('/mycalc',[CalcController::class, 'index']);
Route::post('/mycalc',[CalcController::class, 'calc'])->name('calc');
