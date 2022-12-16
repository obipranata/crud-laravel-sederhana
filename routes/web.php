<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SekolahController;

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
    return view('home');
})->name('home');

Route::prefix("user")->group(function () {
    Route::get('/list', [UserController::class, 'index'])->name("user.list");
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name("user.detail");
    Route::get('/store', [UserController::class, 'store'])->name("user.store");

    Route::post('/create', [UserController::class, 'create'])->name("user.create");
    Route::put('/update/{id}', [UserController::class, 'update'])->name("user.update");
    Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name("user.destroy");
});

Route::prefix("sekolah")->group(function () {
    Route::get('/list', [SekolahController::class, 'index'])->name("sekolah.list");
    Route::get('/detail/{id}', [SekolahController::class, 'detail'])->name("sekolah.detail");
    Route::get('/store', [SekolahController::class, 'store'])->name("sekolah.store");

    Route::post('/create', [SekolahController::class, 'create'])->name("sekolah.create");
    Route::put('/update/{id}', [SekolahController::class, 'update'])->name("sekolah.update");
    Route::get('/destroy/{id}', [SekolahController::class, 'destroy'])->name("sekolah.destroy");
});
