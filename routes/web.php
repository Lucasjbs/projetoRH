<?php

use App\Http\Controllers\PropostasController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', WelcomeController::class)->name('index');

Route::get('propostas', [PropostasController::class, 'enviar'])->name('propostas');

Route::post('propostas/inserir', [PropostasController::class, 'inserir'])->name('propostas.inserir');

Route::get('propostas/listas', [PropostasController::class, 'listar'])->name('propostas.listas');

Route::get('propostas/listas/{id}', [PropostasController::class, 'listarID'])->name('propostas.listasid');

Route::get('propostas/{id}/editar', [PropostasController::class, 'editar'])->name('propostas.editar');

Route::put('propostas/{id}/editarbd', [PropostasController::class, 'editarbd'])->name('propostas.editarbd');

Route::delete('propostas/{id}/deletar', [PropostasController::class, 'deletar'])->name('propostas.deletar');