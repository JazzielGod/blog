<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/example', function () {
    return view('welcome');
});

Route::get('/', HomeController::class);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);  
Route::get('/post/{post}', [PostController::class, 'show']);



/*
Route::get('/post/{post}/{category}', function ($post, $category) {
    return "Aqui se mostrara el post $post en la categoria $category";
});

Route::get('/post/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aqui se mostrara el post $post en la categoria $category";
    } else {
        return "Aqui se mostrara el post $post";
    }
});*/

//get
//post
//put
//patch
//delete
