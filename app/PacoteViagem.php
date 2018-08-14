<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacoteViagem extends Model
{
    protected $fillable = [
        'designacao', 'descricao', 'data_inicio', 'data_fim', 'estado', 'operadors_id',
    ];
    //Relations
    public function fotos()
    {
        return $this->hasMany('App\FotoPacote', 'pacote_viagems_id');
    }
    public function operador()
    {
        return $this->belongsTo('App\Operador', 'operadors_id');
    }
}
