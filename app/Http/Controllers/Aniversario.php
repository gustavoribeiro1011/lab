<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Carbon;


class Aniversario extends Controller
{
    public function index(Request $request)
    {
        $idade = null;

        if ($request->isMethod('post')) {
            //Data de nascimento no formato "dd/mm/aaaa"
            $dataNascimento = $request->input('data_nascimento');

            //Obter a data de hoje usando Carbon
            $dataAtual = Carbon::now();

            //Converter a data de nascimento para um objeto Carbon
            $dataNasc = Carbon::createFromFormat("d/m/Y", $dataNascimento);

            //Calcular a diferença de anos entre a data de nascimento e data atual
            $idade = $dataNasc->diffInYears($dataAtual);          
        }

        return view('exemplos.aniversario', ['idade' => $idade]);
    }
}
