<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::GET('/login',[UserController::class,'login_page'])->name('login');
Route::POST('/login/post',[UserController::class,'login'])->name('login.post');
Route::get('/', function () {
    return view('tambahkegiatan');
});
