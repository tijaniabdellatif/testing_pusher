<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
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

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('home', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('categories')->group(function () {

        Route::get('/index', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
        Route::get('/edit/{id}/{slug}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{slug}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });

});

Route::prefix('client')->middleware('client')->group(function () {
    Route::get('home', [ClientController::class, 'index'])->name('client.home');

});

Route::prefix('user')->middleware('user')->group(function () {
    Route::get('home', [UserController::class, 'index'])->name('user.home');

});
