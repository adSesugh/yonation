<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'about'])->name('about.index');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery.index');
Route::get('/jobs', [FrontController::class, 'jobs'])->name('jobs.index');
Route::get('/job/{slug}', [FrontController::class, 'jobDetails'])->name('job.detail');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [FrontController::class, 'blogDetails'])->name('blog.detail');

Route::get('/user-data', [FrontController::class, 'jobApply'])->name('job.apply');
Route::post('/user-data', [FrontController::class, 'jobApplyStore'])->name('job.applyStore');
Route::post('message', [FrontController::class, 'postMessage'])->name('post.message');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('user/dashboard', [HomeController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('user/dashboard/edit', [HomeController::class, 'userDashboardEdit'])->name('user.dashboard.edit');
    Route::patch('user/dashboard/edit/{resumeId}', [HomeController::class, 'userDashboardPost'])->name('user.resume.update');
    Route::resource('/banners', BannerController::class);
    Route::get('mark_as/{id}/{value}', [BannerController::class, 'markAs'])->name('banners.markas');
    Route::resource('/categories', CategoryController::class)->except(['show']);
    Route::resource('/blogs', BlogController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::resource('/galleries', GalleryController::class)->except(['destroy', 'show', 'create', 'edit']);
    Route::resource('/resumes', ResumeController::class);
    Route::post('search_applicant', [ResumeController::class, 'searchApplicant'])->name('applicant.search');
    Route::get('getResumes', [ResumeController::class, 'getResumes'])->name('resumes.list');
    Route::resource('/jobbank', JobController::class);
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'store'])->name('settings.store');
    Route::resource('/users', UserController::class);
    Route::resource('/messages', MessageController::class);

    Route::get('contractors', [ContractorController::class, 'index'])->name('contractors.index');
    Route::get('contractors/{contractor}', [ContractorController::class, 'show'])->name('contractors.show');
});

Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});

Route::match(['get', 'post'], 'reset', function(){
    return redirect('/');
});

Route::match(['get', 'post'], 'verify', function(){
    return redirect('/');
});

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);
