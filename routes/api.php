<?php

use App\Http\Controllers\ContractorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('contractors', [ContractorController::class, 'store'])->name('contractors.store');
Route::get('contractors/{contractor}', [ContractorController::class, 'cprofile'])->name('cprofile');
Route::patch('contractors/{contractor', [ContractorController::class, 'update'])->name('contractors.update');
