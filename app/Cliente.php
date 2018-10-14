<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public function ventas(){
        return $this->hasMany(Venta::class, 'id_cliente');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_usuario');
    }
}
