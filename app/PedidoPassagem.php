<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoPassagem extends Model
{
    protected $fillable = [
        'nr_passageiros', 'ponto_partida', 'ponto_chegada', 'data_partida', 'descricao', 'estado', 'passagems_id','clientes_id', 'passageiros_id', 'contactos_id', 
    ];
}
