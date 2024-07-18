<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Middleware\AutenticacaoMiddleware;
use App\Http\Middleware\LogAcessoMiddleware;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Rotas Web
|--------------------------------------------------------------------------
*/


// Rotas do grupo "home"
Route::prefix('/')->middleware(['log'])
    ->group(function () {
        Route::get('/', [PrincipalController::class, 'principal'])
            ->name('home.index');
        Route::get('/contato', [ContatoController::class, 'contato'])
            ->name('home.contato');
        Route::post('/contato', [ContatoController::class, 'salvar'])
            ->name('home.contato');
        Route::get('/sobre-nos', [SobreNosController::class, 'sobrenos'])
            ->name('home.sobrenos');
        Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])
            ->name('home.teste');
        Route::get('/login', function () {
            return view('site.login');
        })->name('home.login');
    });

// Rotas do grupo "app"
Route::prefix('/app')->middleware(['log', 'autenticacao'])
    ->group(function () {
        Route::get('/produtos', function () {
            return view('app.produtos');
        })->name('app.produtos');
        Route::get('/clientes', function () {
            return view('app.clientes');
        })->name('app.clientes');
        Route::get('/fornecedores', [FornecedorController::class, 'index'])
            ->name('app.fornecedores');
    });

/*
/--------------------------------------------------------------------------
/   Funções
/--------------------------------------------------------------------------
*/

Route::fallback(function () {
    echo 'Sinto muito, essa página ainda está em construção e estamos trabalhando o mais rápido possível para que esse conteúdo chegue até você!! Clique aqui para ser redirecionado a tela principal: <a href="' . route('home.index') . '">Retornar</a>';
});
