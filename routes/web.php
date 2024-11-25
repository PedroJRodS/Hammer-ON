<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AcessorioController;
use App\Http\Controllers\InstrumentoController;

//Laravel_Breeze
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

//Controllers pros CRUDS

//Instrumentos
Route::get('/instrumentos', [InstrumentoController::class, 'index'])->name('instrumentos.index');
Route::get('/instrumentos/create', [InstrumentoController::class, 'create'])->name('instrumentos.create');
Route::post('/instrumentos', [InstrumentoController::class, 'store'])->name('instrumentos.store');
Route::get('/instrumentos/{instrumento}', [InstrumentoController::class, 'show'])->name('instrumentos.show');
Route::get('/instrumentos/{instrumento}/edit', [InstrumentoController::class, 'edit'])->name('instrumentos.edit');
Route::put('/instrumentos/{instrumento}', [InstrumentoController::class, 'update'])->name('instrumentos.update');
Route::delete('/instrumentos/{instrumento}', [InstrumentoController::class, 'destroy'])->name('instrumentos.destroy');

//Acessórios
Route::get('/acessorios', [AcessorioController::class, 'index'])->name('acessorios.index');
Route::get('/acessorios/create', [AcessorioController::class, 'create'])->name('acessorios.create');
Route::post('/acessorios', [AcessorioController::class, 'store'])->name('acessorios.store');
Route::get('/acessorios/{acessorio}', [AcessorioController::class, 'show'])->name('acessorios.show');
Route::get('/acessorios/{acessorio}/edit', [AcessorioController::class, 'edit'])->name('acessorios.edit');
Route::put('/acessorios/{acessorio}', [AcessorioController::class, 'update'])->name('acessorios.update');
Route::delete('/acessorios/{acessorio}', [AcessorioController::class, 'destroy'])->name('acessorios.destroy');
