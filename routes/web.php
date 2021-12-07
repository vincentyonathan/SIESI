<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KegiatanController;

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

Route::get('/',[KegiatanController::class,'mainpage'])->name('mainpage');

Route::GET('/login',[UserController::class,'login_page'])->name('login');
Route::POST('/login/post',[UserController::class,'login'])->name('login.post');

Route::get('/addkegiatan/',[KegiatanController::class,'addkegiatanpage'])->name('addKegiatan');
Route::POST('/addkegiatan/post',[KegiatanController::class,'addKegiatan'])->name('addKegiatan.post');
