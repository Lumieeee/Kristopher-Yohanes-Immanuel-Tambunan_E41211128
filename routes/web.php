<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\LesController;
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

Route::resource('/dashboard', DashboardController::class);
Route::resource('/les', LesController::class);
Route::group(['prefix' => 'backend'], function () {
    Route::get('les', [LesController::class, 'index'])->name('les.index');
    Route::get('les/create', [LesController::class, 'create'])->name('les.create');
    Route::post('les', [LesController::class, 'store'])->name('les.store');
    Route::get('les/{les}/edit', [LesController::class, 'edit'])->name('les.edit');
    Route::put('les/{les}', [LesController::class, 'update'])->name('les.update');
    Route::delete('les/{les}', [LesController::class, 'destroy'])->name('les.destroy');
});
