<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth\login');
});
Route::put('/post/edit/{id}',[PostController::class,'update'])->name('post_update');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post_edit');
Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post_destroy');


Route::get('/post',[PostController::class,'index'])->name('post_index');

Route::post('/post',[PostController::class,'create'])->name('post_create');

Route::get('/navi', function () {
    return view('layouts\navigation');
});

Route::get('/dashboard',[DashboardController::class,'show_post'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



