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

Route::get('/technologies', function () {
    return view('technologies');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::post('/contact-us', 'ContactUsController@sendEmail');

Route::group(['prefix' => 'technologies'], function() {
    Route::get('/', function () {
        return view('technologies.index');
    });
});

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

Route::get('/products/immunped', function (){
    return view('products/immunped');
});

Route::get('/products/kastair_eztab', function (){
    return view('products/kastair_eztab');
});

Route::get('/products/biogesic', function (){
    return view('products/biogesic');
});

Route::get('/products/rimaped', function (){
    return view('products/rimaped');
});