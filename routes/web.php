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
    return view('welcome');
});

Route::get('/shop', function () {
    return view('infoshop');
});

Route::get('/why', function () {
    return view('infowhy');
});

Route::get('/testimonial', function () {
    return view('infotesti');
});

Route::get('/contact', function () {
    return view('infokontak');
});

Route::resource('brands', BrandController::class);
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);
