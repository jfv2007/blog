<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;

/* Route::get('/', [PostController::class,'index'])->name('posts.index'); */
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}',[App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('category/{category}',[App\Http\Controllers\PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}',[\App\Http\Controllers\PostController::class,'tag'])->name('posts.tag');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
