<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/detail', function () {
    return view('detail_product');
});
Route::get('/detail_order', function () {
    return view('detail_order');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/terms', function () {
    return view('terms');
});
