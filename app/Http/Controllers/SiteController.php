<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * mostra a página home
     *
     * @return void
     */
    public function index()
    {
        echo "Conteudo dinamico Home";
    }

    /**
     * mostra a página de sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo "Conteudo dinamico Sobre";
    }

    /**
     * mostra a página de contato
     *
     * @return void
     */
    public function contato()
    {
        echo "Conteudo dinamico Contato";
    }

    /**
     * mostra a página de serviços
     *
     * @return void
     */
    public function servicos()
    {
        echo "Conteudo dinamico Serviços";
    }

    /**
     * mostra um serviço por id
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => "Lavagem de Roupa",
                'descricao' => "descrição muito longa..."
            ],
            2 => [
                'nome' => "Lavagem de Coberta",
                'descricao' => "descrição muito longa..."
            ],
            3 => [
                'nome' => "Lavagem de Urso",
                'descricao' => "descrição muito longa..."
            ],
        ];

        echo $servicos[$id]['nome'];
        echo "<br>";
        echo $servicos[$id]['descricao'];
    }
}
