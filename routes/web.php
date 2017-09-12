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

    $arraySlides = [
        [
            'img-src' => 'suredose1.png',
            'img-title' => 'Address Children’s Needs',
            'img-description' => 'Our formulations aim to address gaps in pediatric medications to improve children’s compliance and ease of administration.',
        ],
        [
            'img-src' => 'zincplus1.png',
            'img-title' => 'Improve products',
            'img-description' => 'Using various technologies that we’ve developed, our products improve on existing formulations in order to cater to children’s specific needs such as taste and simpler dosing formats.',
        ],
        [
            'img-src' => 'tasterite-kid.png',
            'img-title' => 'Easier for Everyone',
            'img-description' => 'Our products aim to make the lives of children, parents and healthcare providers easier.',
        ]
    ];

    return view('home')->with(compact('arraySlides'));
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