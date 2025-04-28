<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    

    public function index () {
        $products = Product::all();
        return view('Product.index' , compact('products'));
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

    public function show($id){
        $product = Product::findorFail($id);
        return $product;
    }
}
