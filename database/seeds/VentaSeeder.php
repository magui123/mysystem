<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
            'precio_compra'=>81.0,
            'precio_publico'=>126.0,
            'precio_venta'=>100.0,
            'tipo_pago'=>1,
            'tipo_pago_desc'=>'pagos',
            'id_producto'=>1,
            'id_campanha'=>1,
            'id_cliente' => 1,      
        ]);
        DB::table('ventas')->insert([
            'precio_compra'=>45.0,
            'precio_publico'=>70.0,
            'precio_venta'=>60.0,
            'tipo_pago'=>1,
            'tipo_pago_desc'=>'pagos',
            'id_producto'=>2,
            'id_campanha'=>1,
            'id_cliente' => 2,      
        ]);
        DB::table('ventas')->insert([
            'precio_compra'=>70.0,
            'precio_publico'=>130.0,
            'precio_venta'=>110.0,
            'tipo_pago'=>0,
            'tipo_pago_desc'=>'contado',
            'id_producto'=>1,
            'id_campanha'=>2,
            'id_cliente' => 4,      
        ]);
        DB::table('ventas')->insert([
            'precio_compra'=>142.6,
            'precio_publico'=>230.0,
            'precio_venta'=>180.0,
            'tipo_pago'=>1,
            'tipo_pago_desc'=>'pagos',
            'id_producto'=>1,
            'id_campanha'=>4,
            'id_cliente' =>2,      
        ]);
    }
}
