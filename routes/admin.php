<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FallaController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\Tag18Controller;
Use App\Http\Controllers\Admin\Falla1Controller;
use App\Http\Controllers\Admin\Ptas18Controller;
use App\Http\Controllers\Admin\TrabajoController;
use App\Http\Controllers\Admin\EtrabajoController;
use App\Http\Controllers\DatatableController;



use App\Http\Livewire\Planta;

Route::get('',[HomeController::class, 'index'])->name('admin.home');

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

Route::get('tag18s', [Tag18Controller::class, 'index'])->name('admin.tag18s.index');
Route::get('/tag18s/{tag18}/edit', [Tag18Controller::class, 'edit'])->name('admin.tag18s.edit');
Route::get('/tag18s/create', [Tag18Controller::class, 'create'])->name('admin.tag18s.create');
Route::post('/tag18s/store', [Tag18Controller::class, 'store'])->name('admin.tag18s.store');
Route::put('/tag18s/update/{tag18}', [Tag18Controller::class, 'update'])->name('admin.tag18s.update');
Route::delete('tag18s/{tag18}', [Tag18Controller::class, 'destroy'])->name('admin.tag18s.destroy');


Route::get('fallas', [FallaController::class, 'index'])->name('admin.fallas.index');
Route::get('/fallas/{falla}/edit', [FallaController::class, 'edit'])->name('admin.fallas.edit');
/* Route::get('/efallas/{falla}/show', [FallaController::class, 'show'])->name('admin.falla.show'); */
Route::get('/fallas/create', [FallaController::class, 'create'])->name('admin.fallas.create');
Route::post('/fallas/store', [FallaController::class, 'store'])->name('admin.fallas.store');
Route::put('/fallas/update/{falla}', [FallaController::class, 'update'])->name('admin.fallas.update');
Route::delete('fallas/{falla}', [FallaController::class, 'destroy'])->name('admin.fallas.destroy');


/* Route::get('/planta',Planta::class)->name('planta'); */

Route::get('fallas1', [Falla1Controller::class, 'index'])->name('admin.fallas1.index');
Route::get('/fallas1/{fallas1}/edit', [Falla1Controller::class, 'edit'])->name('admin.fallas1.edit');
Route::get('/fallas1/{fallas1}/show', [Falla1Controller::class, 'show'])->name('admin.fallas1.show');
Route::get('/fallas1/create', [Falla1Controller::class, 'create'])->name('admin.fallas1.create');
Route::post('/fallas1/store', [Falla1Controller::class, 'store'])->name('admin.fallas1.store');
Route::put('/fallas1/update/{fallas1}', [Falla1Controller::class, 'update'])->name('admin.fallas1.update');
Route::delete('fallas1/{fallas1}', [Falla1Controller::class, 'destroy'])->name('admin.fallas1.destroy');


Route::get('ptag18s', [Ptas18Controller::class, 'index'])->name('admin.ptag18s.index');
Route::get('/ptag18s/{fallas2}/edit', [Ptas18Controller::class, 'edit'])->name('admin.ptag18s.edit');
Route::get('/ptag18s/{fallas2}/show', [Ptas18Controller::class, 'show'])->name('admin.ptag18s.show');
Route::get('/ptag18s/create', [Ptas18Controller::class, 'create'])->name('admin.ptag18s.create');
Route::post('/ptag18s/store', [Ptas18Controller::class, 'store'])->name('admin.ptag18s.store');
Route::put('/ptag18s/update/{fallas}', [Ptas18Controller::class, 'update'])->name('admin.ptag18s.update');
Route::delete('ptag18s/{fallas2}', [Ptas18Controller::class, 'destroy'])->name('admin.ptag18s.destroy');

/* TRABAJOS */
Route::get('trabajos', [TrabajoController::class, 'index'])->name('admin.trabajos.index');
Route::get('/trabajos/{trabajo}/edit', [TrabajoController::class, 'edit'])->name('admin.trabajos.edit');
Route::get('/trabajos/create', [TrabajoController::class, 'create'])->name('admin.trabajos.create');
Route::post('/trabajos/store', [TrabajoController::class, 'store'])->name('admin.trabajos.store');
Route::put('/trabajos/update/{trabajo}', [TrabajoController::class, 'update'])->name('admin.trabajos.update');
Route::delete('trabajos/{trabajo}', [TrabajoController::class, 'destroy'])->name('admin.trabajos.destroy');

/* TRABAJOS editar */

Route::get('etrabajos', [EtrabajoController::class, 'index'])->name('admin.etrabajos.index');
Route::get('/etrabajos/{etrabajo}/edit', [EtrabajoController::class, 'edit'])->name('admin.etrabajos.edit');
/* Route::get('/efallas/{falla}/show', [FallaController::class, 'show'])->name('admin.falla.show'); */
Route::get('/etrabajos/create', [EtrabajoController::class, 'create'])->name('admin.etrabajos.create');
Route::post('/etrabajos/store', [EtrabajoController::class, 'store'])->name('admin.etrabajos.store');
Route::put('/etrabajos/update/{etrabajo}', [EtrabajoController::class, 'update'])->name('admin.etrabajos.update');
Route::delete('etrabajos/{etrabajo}', [EtrabajoController::class, 'destroy'])->name('admin.etrabajos.destroy');

Route::get('datatable/tag18s','DatatableController@tag18')->name('datatable.tag18');

