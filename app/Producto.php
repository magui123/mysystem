<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    public function user(){
        return $this->belongsTo(User::class,'id_usuario');
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class,'id_empresa');
    }

    public function ventas(){
        return $this->hasMany(Venta::class,'id_producto');
    }

}
