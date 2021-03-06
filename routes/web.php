<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BlogsController::class, 'index']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Blogs Route
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
Route::post('/blogs/store', [BlogsController::class, 'store'])->name('blogs.store');

// <-- Keep Trashed blog Route Here -->
Route::get('/blogs/trash', [BlogsController::class, 'trash'])->name('blogs.trash');
Route::get('/blogs/trash/{id}/restore', [BlogsController::class, 'restore'])->name('blogs.restore');
Route::delete('/blogs/trash/{id}/permanent-delete', [BlogsController::class, 'permanent_delete'])->name('blogs.permanent-delete');
// <-- Keep Trashed Route Here -->

Route::get('/blogs/{id}', [BlogsController::class, 'show'])->name('blogs.show');
Route::get('/blogs/{id}/edit', [BlogsController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}/update', [BlogsController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}/destroy', [BlogsController::class, 'destroy'])->name('blogs.destroy');

//Category Resource Route
Route::resource('/category', CategoryController::class);

// <-- ADMIN ROUTES -->
Route::get('/admin', [AdminController::class , 'index'])->name('admin.index');
Route::get('/admin/blogs', [AdminController::class , 'blogs'])->name('admin.blogs');

