<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }
   
    public function productos(){
        return $this->hasMany(Producto::class,'id');
    }

    public function campanhas(){
        return $this->hasMany(Campanha::class,'id');
    }
    public function pagos(){
        return $this->hasMany(Pago::class,'id_venta');
    }
}
