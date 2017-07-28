<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/technologies', function () {
    return view('technologies');
});

Route::get('/products', function () {
    return view('products');
});

//Route::group(['prefix' => 'technologies'], function() {
//    Route::get('/phytosome', function () {
//        return view('technologies.phytosome');
//    });
//});

Route::get('/technologies/eztab', function (){
    return view('technologies/eztab');
});

Route::get('/technologies/suredose', function (){
    return view('technologies/suredose');
});

Route::get('/technologies/tasterite', function (){
    return view('technologies/tasterite');
});

Route::get('/technologies/toothfriendly', function (){
    return view('technologies/toothfriendly');
});

Route::get('/technologies/zincplus', function (){
    return view('technologies/zincplus');
});
