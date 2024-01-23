<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuAjarTeksController;
use App\Http\Controllers\PenelitianController;

use App\Http\Controllers\Admin\DosenController as AdminDosenController;
use App\Http\Controllers\Admin\PenelitianController as AdminPenelitianController;
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

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::resource('buku-ajar-teks', BukuAjarTeksController::class);
    Route::resource('penelitian', PenelitianController::class);
    Route::resource('forum', PenelitianController::class);
    Route::resource('hki', PenelitianController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:lembaga'])->group(function () {
  
    Route::get('/lembaga/home', [HomeController::class, 'lembagaHome'])->name('lembaga.home');
    Route::prefix('lembaga')->name('lembaga.')->group(function () {
        Route::resource('dosen', AdminDosenController::class);
        Route::resource('penelitian', AdminPenelitianController::class);
    });
});