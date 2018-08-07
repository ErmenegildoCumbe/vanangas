<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua_avenida', 'provincia', 'cidade', 'detalhes',
    ];
}
