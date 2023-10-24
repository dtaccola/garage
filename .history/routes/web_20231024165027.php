<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('users-index');
    Route::get('/create', 'create')->name('users-create');
    Route::post('/users', 'store')->name('users-store');
    Route::get('/show/{user}', 'show')->name('users-show');
    Route::get('/edit/{user}', 'edit')->name('users-edit');
    Route::post('/update/{user}', 'update')->name('users-update');
    Route::delete('/destroy/{user}', 'destroy')->name('users-destroy');
});

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
