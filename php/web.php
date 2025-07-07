<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\numberController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/calculator',[numberController::class,'index'])->name('calculator.index');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

