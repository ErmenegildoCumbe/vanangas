<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passagem extends Model
{
    protected $fillable = [
        'nome', 'data_criaco', 'descricao', 'estado', 'companhia_viagens_id', 'operadors_id', 
    ];
}
