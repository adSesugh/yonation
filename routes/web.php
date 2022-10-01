<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => ['guest']], function(){
    Route::get('/dashboard', [FrontController::class, 'admin'])->name('dashboard');
    Route::resource('/banners', BannerController::class);
    Route::resource('/categories', CategoryController::class)->except(['show']);
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/resumes', [ResumeController::class, 'index'])->name('resumes.index');
    Route::get('/jobbank', [JobController::class, 'index'])->name('jobbank.index');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::resource('/users', UserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
