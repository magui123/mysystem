<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagos')->insert([
            'acuenta'=>50.0,
            'saldo'=>50.0,
            'id_venta' => 1,   
        ]);
        DB::table('pagos')->insert([
            'acuenta'=>50.0,
            'saldo'=>10.0,
            'id_venta' => 2,   
        ]);
        DB::table('pagos')->insert([
            'acuenta'=>150.0,
            'saldo'=>30.0,
            'id_venta' => 4,   
        ]);
    }
}
