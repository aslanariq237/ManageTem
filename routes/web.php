<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CustomerController,
    KeluhanController,
    TeknisiController
};

Route::get('/', [CustomerController::class, 'index'])->name('DataCust');
Route::post('/cust', [CustomerController::class, 'create'])->name('AddCust');

Route::get('/teknisi', [TeknisiController::class, 'index'])->name('DataTekn');
