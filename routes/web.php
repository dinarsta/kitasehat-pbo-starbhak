<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CatatanController;

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
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/datacatatan',[CatatanController::class,'index'])->name('datacatatan');

Route::get('/tambahcatatan', [CatatanController::class, 'tambahcatatan'])->name('tambahcatatan');

Route::post('/insertdata', [CatatanController::class, 'insertdata'])->name('insertdata');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::post('/logout', [LoginController::class, 'logout']);