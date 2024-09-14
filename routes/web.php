<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employeecontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::resource("/employee", Employeecontroller::class);
