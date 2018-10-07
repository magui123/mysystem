<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioEmpresa extends Model
{
    //

    public function empresa(){
        return $this->belongsTo(Empresa::class,'id_empresa');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_usuario');
    }
}
