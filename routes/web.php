<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class , 'index']
);

Route::get('/loop', function () {
    $car_Types = ['Mercedes' ,  'BMW' , 'Toyota' , 'Audi'];
    Return view('loop' , compact('car_Types'));
});

