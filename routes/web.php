<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class , 'index']
);

Route::get('/about', function () {
    return view('content');
});

Route::get('/product', function () {
    $products = [
        ['name' => 'laptop' , 'price' => 1500],
        ['name' => 'Headset' , 'price' => 120],
        ['name' => 'Keyboard' , 'price' => 75],
    ];
    return view('products' , compact('products'));
});