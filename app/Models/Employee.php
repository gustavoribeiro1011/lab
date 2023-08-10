<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    /**
     * Defino o que vai ser permitido
     *
     * @var array
     */
    protected $fillable = ['nome', 'cpf', 'data_contratacao','data_demissao'];

    /**
     * Defino o que não vai ser permitido
     */
    // protected $guarded = ['created_at', 'updated_at', 'id'];

    /**
     * Permite tudo
     */
    // protected $guarded = [];

>>>>>>> 5a1501f4f3b1b4866a25a7af74557e4e94bc1267
}
