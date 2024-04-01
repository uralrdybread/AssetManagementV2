<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('assets', AssetController::class);

Route::resource('employees', EmployeeController::class);

Route::resource('reports', ReportsController::class)->only([
    'index'
]);
