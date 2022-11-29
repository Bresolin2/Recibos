<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
Route::get('/cliente', [ClienteController::class, 'index'])->name('index');
Route::get('/', [ClienteController::class, 'index']);
Route::delete('/usuario/{id}', [ClienteController::class, 'destroy'])->name('destroy');
Route::get('/usuario/{id}/editar', [ClienteController::class, 'edit'])->name('edit');
Route::put('/usuario/{id}', [ClienteController::class, 'update'])->name('update');
Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('show');
Route::get('/usuario', [ClienteController::class, 'usuario'])->name('usuario');
Route::post('/cliente/search', [ClienteController::class, 'search'])->name('search');
Route::post('/cliente/licenca', [ClienteController::class, 'licenca'])->name('licenca');
Route::get('/registrar', [ClienteController::class, 'registro'])->name('registro');
Route::post('/registrar', [ClienteController::class, 'store'])->name('registro');

});


Route::get('/login', function () {
    return view('login');
});

require __DIR__.'/auth.php';
