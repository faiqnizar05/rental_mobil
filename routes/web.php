<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\DashboardController;

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


Route::get('/',[UserController::class,'index']);
Route::get('/car',[UserController::class,'car']);
Route::get('/about',[UserController::class,'about']);
Route::get('/registrasi',[UserController::class,'registrasi']);
Route::post('/submit-registrasi',[UserController::class,'submit_registrasi']);
Route::get('/history-sewa',[UserController::class,'history_sewa']);

Route::middleware(['auth'])->group(function () {
Route::get('/sewa/{id}',[UserController::class,'sewa']);
Route::post('/cek-harga',[UserController::class,'cekharga']);
Route::post('/submit-sewa',[LoanController::class,'submit_sewa']);


});
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class,'dashboard']);
    
        Route::get('/type', [TypeController::class,'index']);
        Route::post('/submit-type', [TypeController::class,'submit']);
        Route::get('/edit-type/{id}', [TypeController::class,'edit']);
        Route::put('/update-type/{id}', [TypeController::class,'update']);
        Route::delete('/delete-type/{id}', [TypeController::class,'delete']);
        
        Route::get('/car', [CarController::class,'index']);
        Route::post('/submit-car', [CarController::class,'submit']);
        Route::get('/edit-car/{id}', [CarController::class,'edit']);
        Route::put('/update-car/{id}', [CarController::class,'update']);
        Route::delete('/delete-car/{id}', [CarController::class,'delete']);
    
        Route::get('/sewa', [LoanController::class,'index']);
        Route::post('/terima-loan/{id}', [LoanController::class,'terima']);
    });



});
Route::get('/admin/registrasi', [AuthAdminController::class,'register']);
Route::get('/admin/login', [AuthAdminController::class,'login']);
Route::post('/admin/submit-login', [AuthAdminController::class,'submit_login']);

require __DIR__.'/auth.php';
