<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Category;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', function (Request $request) {
    return Product::all();
});

Route::get('/products/{id}', function (Request $request , $id) {
    return Product::find($id);
});

Route::post('product' , function(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'category' => 'required|string ',
        'discount' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 400);
    }

    $product = Product::create($request->all());
    return $product;
});

route::post('category' , function(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',  
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 400);
    }

    $category = Category::create($request->all());
    return $category;
});