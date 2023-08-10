<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['logradouro','numero','bairro','cidade','complemento','cep','estado'];

    /**
     * Defini que o Endereço pertence ao Funcionário
     *
     * @return void
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
