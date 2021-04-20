<?php

use App\Http\Controllers\BlogsController;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Blogs Route
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
Route::post('/blogs/store', [BlogsController::class, 'store'])->name('blogs.store');
