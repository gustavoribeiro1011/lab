<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * Defino o que vai ser permitido
     *
     * @var array
     */
    protected $fillable = ['nome', 'cpf', 'data_contratacao', 'data_demissao'];

    /**
     * Defino o que não vai ser permitido
     */
    // protected $guarded = ['created_at', 'updated_at', 'id'];

    /**
     * Permite tudo
     */
    // protected $guarded = [];

    /**
     * Defini a relação com endereço
     *
     * @return void
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}