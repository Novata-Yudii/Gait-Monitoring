<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/myprofile', [MyProfileController::class, 'index'])->middleware('auth');
Route::put('/myprofile', [MyProfileController::class, 'update'])->middleware('auth');

Route::get('/patient', [PatientController::class, 'index'])->middleware('auth');
Route::get('/patient/{id}', [PatientController::class, 'show'])->middleware('auth');
Route::get('/patient/create', [PatientController::class, 'create'])->middleware('auth');
Route::post('/patient', [PatientController::class, 'store'])->middleware('auth');
Route::get('/patient/edit/{id}', [PatientController::class, 'edit'])->middleware('auth');
Route::put('/patient/{id}', [PatientController::class, 'update'])->middleware('auth');
Route::delete('/patient/{id}', [PatientController::class, 'destroy'])->middleware('auth');