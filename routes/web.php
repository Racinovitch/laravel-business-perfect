<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::post('/admin/blogs', [BlogController::class, 'store']);
Route::get('/blogs/create', [BlogController::class, 'create']);
