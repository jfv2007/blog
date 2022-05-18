<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;



Route::get('',[HomeController::class, 'index'])->name('admin.home');

/* Route::resource('admin/categories',CategoryController::class)->shallow(); */

/* Route::resource('pruebas',PruebaController::class); */
/*Ruta del video*/
/*  Route::resource('categories',CategoryController::class)->names('admin.categories'); */

Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::put('admin/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

Route::get('tags', [TagController::class, 'index'])->name('admin.tags.index');
Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('admin.tags.edit');
Route::get('/tags/create', [TagController::class, 'create'])->name('admin.tags.create');
Route::post('/tags/store', [TagController::class, 'store'])->name('admin.tags.store');
Route::put('/tags/update/{tag}', [TagController::class, 'update'])->name('admin.tags.update');
Route::delete('tags/{tag}', [TagController::class, 'destroy'])->name('admin.tags.destroy');


Route::get('posts', [PostController::class, 'index'])->name('admin.posts.index');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('admin.posts.store');
Route::put('/posts/update/{post}', [PostController::class, 'update'])->name('admin.posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
