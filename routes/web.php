<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\LineDataController;
use App\Http\Controllers\LineEntryController;
use App\Http\Controllers\LineHistoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ImportExportController;

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

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/one_line/{id}', [DashboardController::class, 'line'])->name('one_line')->middleware('auth');

Route::get('/line', [LineController::class, 'index'])->name('line')->middleware('auth');
Route::post('/line/add', [LineController::class, 'store'])->name('line.add')->middleware('auth');
Route::post('/line/update', [LineController::class, 'update'])->name('line.update')->middleware('auth');
Route::get('/line/delete/{id}', [LineController::class, 'delete'])->name('line.delete')->middleware('auth');

Route::get('/user', [UserManagementController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/add', [UserManagementController::class, 'store'])->name('user.add')->middleware('auth');
Route::post('/user/update', [UserManagementController::class, 'update'])->name('user.update')->middleware('auth');
Route::get('/user/delete/{id}', [UserManagementController::class, 'delete'])->name('user.delete')->middleware('auth');

Route::get('/line_history', [LineHistoryController::class, 'index'])->name('line_history')->middleware('auth');

Route::get('/item', [ItemController::class, 'index'])->name('item')->middleware('auth');
Route::post('/item/add', [ItemController::class, 'store'])->name('item.add')->middleware('auth');
Route::post('/item/update', [ItemController::class, 'update'])->name('item.update')->middleware('auth');
Route::get('/item/delete/{id}', [ItemController::class, 'delete'])->name('item.delete')->middleware('auth');


Route::get('/buyer', [BuyerController::class, 'index'])->name('buyer')->middleware('auth');
Route::post('/buyer/add', [BuyerController::class, 'store'])->name('buyer.add')->middleware('auth');
Route::post('/buyer/update', [BuyerController::class, 'update'])->name('buyer.update')->middleware('auth');
Route::get('/buyer/delete/{id}', [BuyerController::class, 'delete'])->name('buyer.delete')->middleware('auth');


Route::get('/line_data', [LineDataController::class, 'index'])->name('line_data')->middleware('auth');
Route::post('/line_data/add', [LineDataController::class, 'store'])->name('line_data.add')->middleware('auth');
Route::get('/line_data/delete/{id}', [LineDataController::class, 'delete'])->name('line_data.delete')->middleware('auth');


Route::get('/line_entry', [LineEntryController::class, 'index'])->name('line_entry')->middleware('auth');
Route::get('/line_entry/{id}', [LineEntryController::class, 'line_entry'])->name('line_entry.id')->middleware('auth');
Route::post('/line_target_entry', [LineEntryController::class, 'line_target_entry'])->name('line_target_entry')->middleware('auth');


Route::get('/report', [ReportController::class, 'index'])->name('report')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//// Search in LineSetting ////
Route::get('buyer_search', [LineDataController::class, 'buyerSearch'])->middleware('auth');
Route::get('item_search', [LineDataController::class, 'itemSearch'])->middleware('auth');


// Livewire
// Route::get('/one/{id}', [One::class]);
