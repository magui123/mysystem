<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //

    public function users(){
        return $this->hasMany(UsuarioEmpresa::class,'id_empresa');
    }

    public function productos(){
        return $this->hasMany(Producto::class, 'id_empresa');
    }

    public function campanhas(){
        return $this->hasMany(Campanha::class,'id_empresa');
    }
}
