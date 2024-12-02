<?php

use App\Models\Instrumento;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AcessorioController;
use App\Http\Controllers\InstrumentoController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::resource('instrumentos', InstrumentoController::class)->middleware('auth');

Route::resource('acessorios', AcessorioController::class)->middleware('auth');

Route::resource('marcas', MarcaController::class)->middleware('auth');
