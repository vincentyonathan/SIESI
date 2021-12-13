<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PencapaianController;
use App\Http\Controllers\NilaiController;

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

// USER


Route::GET('/login',[UserController::class,'login_page'])->name('login');
Route::POST('/login/post',[UserController::class,'login'])->name('login.post');

Route::middleware(['auth'])->group(function() {
    Route::get('/',[KegiatanController::class,'mainpage'])->name('mainpage');
    
    Route::post('/logout',[UserController::class,'logout'])->name('logout');
    // KEGIATAN
    
    Route::get('/addkegiatan/',[KegiatanController::class,'addkegiatanpage'])->name('addKegiatan');
    Route::POST('/addkegiatan/post',[KegiatanController::class,'addKegiatan'])->name('addKegiatan.post');
    
    Route::get('/editkegiatan/{id}',[KegiatanController::class,'editkegiatanpage'])->name('editkegiatan');
    Route::post('/editkegiatan/post',[KegiatanController::class,'editKegiatan'])->name('editkegiatan.post');
    
    Route::get('/deletekegiatan/{id}',[KegiatanController::class,'deleteKegiatan'])->name('deletekegiatan');
    Route::get('/gantistatus/{id}',[KegiatanController::class,'gantiStatus'])->name('gantistatus');
    Route::get('/hasilsurvey/{id}',[KegiatanController::class,'hasilsurveypage'])->name('hasilsurvey');
    
    // CAPAIAN
    
    Route::post('/addcapaian/post',[PencapaianController::class,'addCapaian'])->name('addcapaian.post');
    Route::get('/deletecapaian/{id}/{keg}',[PencapaianController::class,'deleteCapaian'])->name('deletecapaian');
    
    // NILAI / SURVEY
    
    Route::get('/isisurvey/{id}',[NilaiController::class,'isisurveypage'])->name('isisurvey');
    Route::post('/isisurvey/post',[NilaiController::class,'addNilai'])->name('isisurvey.post');
});