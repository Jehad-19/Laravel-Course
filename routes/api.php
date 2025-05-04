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

Route::post('/products', function (Request $request) {
    return Product::create($request->all());
});

Route::get('/products-category/{id}', function (Request $request , $id) {
    return Product::findOrFail($id)->category;
})->name('products.category');

Route::get('/categories', function (Request $request) {
    return Category::all();
});
Route::get('/categories/{id}', function (Request $request , $id) {
    return Category::find($id);
});
Route::get('/category-products/{id}', function (Request $request , $id) {
    return Category::findOrFail($id)->products;
})->name('products_category');


Route::get('/products-variant/{id}', function (Request $request , $id) {
    return Product::findOrFail($id)->productVariants;
})->name('products.variants');





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