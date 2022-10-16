<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/', [AuthController::class, 'loginForm'])->name('user.form');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/register', [UserController::class, 'create'])->name('user.register.form');
Route::post('/register', [UserController::class, 'store'])->name('user.register');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('/posts', PostController::class);
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});
