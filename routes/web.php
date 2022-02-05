<?php

use App\Http\Controllers\Adm\PendenciasController;
use App\Http\Controllers\Cadastro\CadastroController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Preferencia\PreferenciaController;
use App\Http\Controllers\Senha\SenhaController;
use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;

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

Route::get('/sair', function() { $session = new Session; $session->remove('token'); return \redirect('/usuario'); })->middleware('autenticador');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/usuario', [UsuarioController::class, 'index'])->middleware('autenticador');
Route::get('/usuario/{id}', [UsuarioController::class, 'buscaUsuario'])->middleware('autenticador');

Route::get('/deletar/{id}', [UsuarioController::class, 'deletaUsuario'])->middleware('autenticador');

Route::get('/cadastro', [CadastroController::class, 'index']);
Route::post('/cadastro', [CadastroController::class, 'store']);

Route::get('/esqueci-senha', [SenhaController::class, 'index']);
Route::post('/esqueci-senha', [SenhaController::class, 'recuperarSenha']);
Route::get('/email/recover_password/{id}/{hash}', [SenhaController::class, 'novaSenha']);
Route::post('/email/recover_password/{id}/{hash}', [SenhaController::class, 'store']);

Route::get('/preferencia', [PreferenciaController::class, 'buscaPreferencias']);

Route::get('/pendecias/professor', [PendenciasController::class, 'index']);
