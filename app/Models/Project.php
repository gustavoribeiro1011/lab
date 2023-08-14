<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //definir os dados em massa
    protected $fillable = ['nome', 'orcamento', 'data_inicio', 'data_final'];

    /**
     * Defini a relação com cliente
     *
     * @return void
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    /**
     * Define a relação com os funcionários
     *
     * @return Returntype
     */
    function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    /**
     * Define a relação com os funcionários (quando não segue a convenção do laravel)
     *
     * @return Returntype
     *
     *function employees()
     *{
     *   return $this->belongsToMany(Employee::class, 'employee_project', 'project_id','employee_id');
     *}
     */
}
