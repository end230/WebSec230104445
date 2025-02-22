<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/odd', function () {
    return view('odd');
});
Route::get('/prime', function () {
    return view('prime');
});
Route::get('/multiplication', function () {
    return view('multiplication');
});