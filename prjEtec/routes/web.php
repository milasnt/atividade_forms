<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

require __DIR__.'/auth.php';

Route::get('/', function () { return PrincipalController::home();})->name('home');
Route::get('/cursos', function () { return PrincipalController::cursos();})->name('cursos');
Route::get('/departamento', function () { return PrincipalController::departamento();})->name('departamento');
Route::get('/contato', function () { return PrincipalController::contato();})->name('contato');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function() {
    echo 'Olá Usuário! Página não encontrada. <a href="'.route('home').'">CLIQUE AQUI</a> para retornar à página inicial.';
});