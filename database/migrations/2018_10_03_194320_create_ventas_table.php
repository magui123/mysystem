<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precio_compra');
            $table->double('precio_publico');
            $table->double('precio_venta');
            $table->tinyInteger('tipo_pago');
            $table->string('tipo_pago_desc',20);
            $table->unsignedInteger('id_producto');
            $table->unsignedInteger('id_campanha');
            $table->unsignedInteger('id_cliente');
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_campanha')->references('id')->on('campanhas');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
