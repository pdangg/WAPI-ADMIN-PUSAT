<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('index');
})->name('index');

Route::get('/newuser', function () {
    return view('newuser');
})->name('newuser');

Route::get('/userorder', function () {
    return view('userorder');
})->name('userorder');

Route::get('/pricelist', function () {
    return view('pricelist');
})->name('pricelist');

Route::get('/usertemplate', function () {
    return view('usertemplate');
})->name('usertemplate');

Route::get('/edituser', function () {
    return view('edituser');
})->name('edituser');