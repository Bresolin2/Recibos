<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
Route::get('/cliente', [ClienteController::class, 'index'])->name('index');
Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('show');
Route::post('/cliente/search', [ClienteController::class, 'search'])->name('search');
Route::post('/cliente/licenca', [ClienteController::class, 'licenca'])->name('licenca');
Route::get('/registrar', [ClienteController::class, 'registro'])->name('registro');
Route::post('/registrar', [ClienteController::class, 'store'])->name('registro');
Route::get('/', [ClienteController::class, 'index']);
});


Route::get('/login', function () {
    return view('login');
});

require __DIR__.'/auth.php';
