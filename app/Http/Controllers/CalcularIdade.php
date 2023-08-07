<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CalcularIdade extends Controller
{
    public function index(Request $request)
    {

        $idade = null;

        if($request->isMethod('post')){

            //Resgatar a data de nascimento preenchido no formulário
            $dataNascimento = $request->input("data_nascimento");

            //Definir a data atual
            $dataAtual = Carbon::now();

            //Converter a data de nascimento para objeto carbon
            $dataNasc = Carbon::createFromFormat("d/m/Y",$dataNascimento);

            //Calcular a diferença de anos entre data de nascimento e data atual
            $idade = $dataAtual->diffInYears($dataNascimento);
        }

        return view('calcular-idade', ['idade' => $idade]);
    }
}
