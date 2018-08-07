<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoPacote extends Model
{
    protected $fillable = [
        'nr_viajantes', 'ponto_partida', 'ponto_chegada', 'meio_transporte', 'categoria_meio_transporte', 'data_inicio', 'data_fim','estado', 'detalhes', 'passagems_id', 'clientes_id','passageiros_id', 'contactos_id',
    ];
}
