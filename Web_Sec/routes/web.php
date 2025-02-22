<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Odd', function () {
    return view('Odd');
});
Route::get('/Prime', function () {
    return view('Prime');
});
Route::get('/Multiplication', function () {
    return view('Multiplication');
});