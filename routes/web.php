<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('/', [Mycontroller::class, 'index']);

Route::get('/login', function(){
    return view('login');
});
Route::get('/pricing', function(){
    return view('pricing');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/contacts', function(){
    return view('contacts');
});
Route::get('/checkout', function(){
    return view('checkout');
});
Route::get('/product', function(){
    return view('product');
});
Route::get('/product_type', function(){
    return view('product_type');
});
Route::get('/shopping_cart', function(){
    return view('shopping_cart');
});
Route::get('/signup', function(){
    return view('signup');
});
Route::get('/404', function(){
    return view('404');
});
Route::get('/', function(){
    return view('index');
});
