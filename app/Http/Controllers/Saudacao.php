<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Undocumented function
     *
     * @param string $nome
     * @return void
     */
    public function __invoke(string $nome = "Treinaweb")
    {
        return view("saudacao")->with("nome", $nome);
    }
}
