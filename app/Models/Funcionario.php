<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    /**
     * Defini o nome da tabela
     *
     * @var string
     */
    protected $table = 'cadfun';

    /**
     * Defini o nome da chave primária
     *
     * @var string
     */
    protected $primaryKey = 'cod';

    /**
     * Define as colunas de timestamp
     */
    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_atualizacao';

    /**
     * Mapeamos o relacionamento com endereço
     *
     * @return void
     */
    function endereco()
    {
        return $this->hasOne(Endereco::class, 'codigo_fun', 'cod');
    }
}
