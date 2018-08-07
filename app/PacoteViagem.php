<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacoteViagem extends Model
{
    protected $fillable = [
        'designacao', 'descricao', 'data_inicio', 'data_fim', 'estado', 'operadors_id',
    ];
}
