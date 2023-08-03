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
    public function __invoke(Request $request)
    {
        echo "Eu sou o controlador de domínio";
        //Chamar a view
    }
}
