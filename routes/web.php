<?php


use App\Http\Controllers\CalcularIdade;
use App\Http\Controllers\SiteHerancaController;
use App\Http\Controllers\SiteComponenteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ClientController;

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


Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('clients/{id}', [ClientController::class, 'update'])->name("clients.update");
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name("clients.destroy");
Route::resource('clients', ClientController::class);

Route::get('/site/heranca', [SiteHerancaController::class, 'home'])->name('site.heranca.home');
Route::get('/site/heranca/portfolio', [SiteHerancaController::class, 'portfolio'])->name('site.heranca.portfolio');
Route::get('/site/heranca/sobre', [SiteHerancaController::class, 'sobre'])->name('site.heranca.sobre');
Route::get('/site/heranca/contato', [SiteHerancaController::class, 'contato'])->name('site.heranca.contato');

Route::get('/site/componente/home/{idioma?}', [SiteComponenteController::class, 'home'])->name('site.componente.home');
Route::get('/site/componente', [SiteComponenteController::class, 'home'])->name('site.componente.home');
Route::get('/site/componente/portfolio', [SiteComponenteController::class, 'portfolio'])->name('site.componente.portfolio');
Route::get('/site/componente/sobre', [SiteComponenteController::class, 'sobre'])->name('site.componente.sobre');
Route::get('/site/componente/contato', [SiteComponenteController::class, 'contato'])->name('site.componente.contato');


Route::get('/', function () {
    return view('index', [
        'paginacao' => true,
        'projetos' => [
            [
                'ativo' => true,
                'imagem' => 'cabin.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'cake.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'circus.png'
            ],
            [
                'ativo' => false,
                'imagem' => 'game.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'safe.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'submarine.png'
            ],
        ]
    ]);
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
    return view('exemplos.condicional_if', [
        'comentarios' => -1
    ]);
});

Route::get('/condicional/switch', function () {
    return view('exemplos.condicional_switch', [
        'mes' => 13
    ]);
});

Route::match(['get', 'post'], '/calcular-idade', [CalcularIdade::class, 'index'])->name("calcular-idade");



// Route::get('/task/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::resource('task', TaskController::class);