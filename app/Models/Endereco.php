<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    /**
     * Defini o nome da tabela
     *
     * @var string
     */
    protected $table = 'cadend';

    /**
     * Defini o nome da chave primária
     *
     * @var string
     */
    protected $primaryKey = 'cod';

    /**
     * Mapeamos o relacionamento com funcionario
     *
     * @return void
     */
    function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'codigo_fun', 'cod');
    }
}
