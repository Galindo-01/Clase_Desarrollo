<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Products', function () {
    return view('Products');
});

Route::get('/interfaz', function () {
    return view('interfaz');
})->name('interfaz');

Route::get('/enlace', function(){
    return  view('enlace');
})->name('enlace');


