<?php

use App\Http\Controllers\BackoffController;
use App\Http\Controllers\BlogBackAllController;
use App\Http\Controllers\BlogBackController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogControllerBack;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeBackController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PortfolioController;
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



// ! Main site
Route::get('/', [IndexController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);




// ! BackOffice

// ? Home
Route::get('/admin/home', [HomeBackController::class, 'index'])->name('backoff');




// ? Controller Blog
Route::get('/admin/blog', [BlogBackController::class, 'index'])->name("blogBack");

Route::get('/admin/blog/create', [BlogBackController::class, 'create'])->name('createBlog');

Route::post('/admin/blogs', [BlogBackController::class, 'store']);

Route::post('/admin/blogs/{id}/delete',
[BlogBackController::class, 'destroy'])->name('delete1');

Route::get('/admin/home/{id}/show', [BlogBackController::class, 'show'])->name("show");


// ? Controller Blog, tous les éléments

Route::get('/admin/blogAll', [BlogBackAllController::class, 'index'])->name("blogBackAll");

Route::post('/admin/blogAll/{id}/delete', [BlogBackAllController::class, 'destroy'])->name("delete");
