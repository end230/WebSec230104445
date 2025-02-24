<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome',['name' => 'Ahmed']); //welcome.blade.php
   });
Route::get('/multable', function () {
    return view('multable'); //multable.blade.php
   });
Route::get('/even', function () {
    return view('even'); //even.blade.php
   });
Route::get('/prime', function () {
    return view('prime'); //prime.blade.php
   });
Route::get('/MiniTest',function() {
    return view('MiniTest'); //mini test.blade.php
});