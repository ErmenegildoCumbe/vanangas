<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'telefone', 'password', 'tipoUsuario', 'apelido', 'enderecos_id','estado', 'foto_perfil',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relations
    public function permissions()
    {
        return $this->belongsToMany('App\Permission','user_permissions','user_id','permission_id');
    }
    public function endereco()
    {
        return $this->belongsTo('App\Endereco', 'enderecos_id');
    }
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'users_id');
    }
}
