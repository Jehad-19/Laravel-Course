<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show ($id) {
        return "hello " . $id;
    }

    public function index () {
        $products = [
            ['name' => 'laptop' , 'price' => 1500],
            ['name' => 'Headset' , 'price' => 120],
            ['name' => 'Keyboard' , 'price' => 75],
        ];
        return $products;
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $name  =  $request->input('name');
        $price =  $request->input('price');
        $products = ['name' => $name , 'price' => $price];
        return $products;
    }
}
