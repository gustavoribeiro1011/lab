<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DominioController extends Controller
{
    public function verificarDominio($dominio){
        //
        return view("dominio");
    }
}
