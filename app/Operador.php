<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    protected $fillable = [
        'administradors_id', 'estado', 'users_id',
    ];
}
