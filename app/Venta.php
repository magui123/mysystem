<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }
   
    public function producto(){
        return $this->belongsTo(Producto::class,'id_producto');
    }

    public function campanhas(){
        return $this->belongsTo(Campanha::class,'id_campanha');
    }
    public function pagos(){
        return $this->hasMany(Pago::class,'id_venta');
    }
}
