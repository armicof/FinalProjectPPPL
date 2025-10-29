<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/lainnya', function () {
    return view('lainnya');
})->name('lainnya');

Route::get('/gempa-bumi', function () {
    return view('gempa');
})->name('gempa');

Route::get('/iklim', function () {
    return view('iklim');
})->name('iklim');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cuaca', function () {
    return view('cuaca');
})->name('cuaca');
