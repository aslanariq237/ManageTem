<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CustomerController,
    KeluhanController,
    TeknisiController
};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('DataCust');
Route::post('/cust', [CustomerController::class, 'create'])->name('AddCust');
//Teknisi
Route::get('/teknisi', [TeknisiController::class, 'index'])->name('DataTek');
Route::post('/tek', [TeknisiController::class, 'create'])->name('AddTek');
//Keluhan
Route::get('/keluhan', [KeluhanController::class, 'index'])->name('DataKel');
Route::post('/kel', [KeluhanController::class, 'create'])->name('AddKel');