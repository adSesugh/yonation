<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'about'])->name('about.index');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery.index');
Route::get('/jobs', [FrontController::class, 'jobs'])->name('jobs.index');
Route::get('/blogs', [FrontController::class, 'blog'])->name('blogs.index');
Route::get('/blogs/{slug}', [FrontController::class, 'jobDetails'])->name('blogs.detail');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
