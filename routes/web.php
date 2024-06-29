<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\TypeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user.index');
});

Route::get('/car', function () {
    return view('user.car');
});

Route::get('/about', function () {
    return view('user.about');
});




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

    Route::get('/peminjaman', [LoanController::class,'index']);
});
