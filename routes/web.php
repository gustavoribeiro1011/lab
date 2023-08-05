<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DominioController;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\SiteController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/passagem/dados', function () {
    return view('exemplos.passagem_dados')->with([
        'nome' => "gustavo",
        'descricao' => "teste"
    ]);
});

Route::get('/exibicao/json', function () {
    return view('exemplos.exibicao_json')->with([
        'posts' => [
            [
                "titulo" => "Novidades do Laravel",
                "conteudo" => "Nesta versão o Laravel..."
            ],
            [
                "titulo" => "Novidades do Blade",
                "conteudo" => "Nesta versão o blade..."
            ]

        ],
    ]);
});

Route::get('/frameworks/js', function () {
    return view('exemplos.frameworks_js')->with([
        'nome' => "gustavo",
        'descricao' => "teste"
    ]);
});

Route::get('/php/comentarios', function () {
    return view('exemplos.comentarios')->with([
        'nome' => "gustavo",
        'descricao' => "teste"
    ]);
});

Route::get('/condicional/if', function () {
    return view('exemplos.condicional_if',[
        'comentarios' => -1
    ]);
});

Route::get('/condicional/switch', function () {
    return view('exemplos.condicional_switch',[
        'mes' => 13
    ]);
});