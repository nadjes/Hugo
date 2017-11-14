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




Route::get('/registro', function () {
    return view('registro');
});

Route::get('/ingreso', function () {
    return view('ingreso');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/faqs', function () {
    return view('faqs');
});




Route::get('/', function () {
    return view('index');
});
