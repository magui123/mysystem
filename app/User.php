<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /*
    
    empresas() ok
    productos() ok
    campanhas() ok
    */
    public function empresas(){
        return $this->hasMany(UsuarioEmpresa::class,'id_usuario');
    }


    public function productos(){
        return $this->hasMany(Producto::class,'id_usuario');
    }

    public function campanhas(){
        return $this->hasMany(Campanha::class,'id_usuario');
    }




}
