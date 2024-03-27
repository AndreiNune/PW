<?php

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

Route::get('/', [ContatoController::class, "index"]);

Route::get('/adicionar', [ContatoController::class, "adicionar"]);

Route::get('/editar', [ContatoController::class, "editar"]);

Route::get('/atualizar', [ContatoController::class, "atualizar"]);

Route::get('/excluir', [ContatoController::class, "excluir"]);

