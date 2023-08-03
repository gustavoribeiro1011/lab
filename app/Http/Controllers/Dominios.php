<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dominios extends Controller
{
/**
 * Controlador de dominios
 *
 * @param Request $request
 * @return void
 */
    public function __invoke(string $dominio = "")
    {
        echo "Você acessou o domínio $dominio";
        //Chamar a view
    }
}
