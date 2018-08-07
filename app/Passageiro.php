<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passageiro extends Model
{
    protected $fillable = [
        'nome', 'apelido', 'forma_tratamento', 'data_nascimento', 'sexo', 'tipo',
    ];
}
