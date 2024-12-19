<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RiskRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RiskTabelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [RiskRegisterController::class, 'index'])->name('dashboard');
    Route::get('/likelihood', [RiskTabelController::class, 'likelihood'])->name('likelihood');
    Route::get('/impact', [RiskTabelController::class, 'impact'])->name('impact');
    Route::resource('risks', RiskRegisterController::class);


    Route::middleware(['role:admin'])->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
    });
});
