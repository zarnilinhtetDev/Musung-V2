<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;

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


Route::view('/', 'auth.login')->name('login_1');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/user', [UserManagementController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/add', [UserManagementController::class, 'store'])->name('user.add')->middleware('auth');
Route::get('/user/edit/{id}', [UserManagementController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::post('/user/update', [UserManagementController::class, 'update'])->name('user.update')->middleware('auth');
Route::get('/user/delete/{id}', [UserManagementController::class, 'delete'])->name('user.delete')->middleware('auth');
