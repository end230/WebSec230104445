<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Post_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Destroy;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',  [Post_Controller::class,'index'])->name('posts.index');

Route::get('/posts/create',  [Post_Controller::class,'create'])->name('posts.create');

Route::post('/posts', [Post_Controller::class,'store'])->name('posts.store');

Route::get('/posts/{post}/edit',  [Post_Controller::class,'edit'])->name('posts.edit');

Route::get('/posts/{post}',  [Post_Controller::class,'show'])->name('posts.show');

Route::put('/posts/{post}',  [Post_Controller::class,'update'])->name('posts.update');

Route::delete('/posts/{post}',[Post_Controller::class,'destroy'])->name('posts.destroy');

