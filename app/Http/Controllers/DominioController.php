<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DominioController extends Controller
{
    public function verificarDominio(string $dominio = "Não encontrado")
    {

        $listaDeDominios = [
            1 => [
                "dominio" => "alegria",
                "status" => "ativo"
            ],
            2 => [
                "dominio" => "seu_dominio",
                "status" => "ativo"
            ],
            3 => [
                "dominio" => "ciamilhas",
                "status" => "ativo"
            ]
        ];

        // Procurar o domínio no array de dados fictício
        $status = null;
        foreach ($listaDeDominios as $item) {
            if ($item["dominio"] === $dominio) {
                $status = $item["status"];
                break;
            }
        }

        // Caso o domínio não seja encontrado, definimos o status como inativo.
        if ($status === null) {
            $status = "inativo";
        }

        // Retornar a view com o status do domínio
        return view('dominio', ['dominio' => $dominio, 'status' => $status]);
    }
}
