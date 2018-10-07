<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CampanhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campanhas')->insert([
            'nombre' => 'imperial',
            'nro_camp' => 10,
            'detalle' => 'campaña 10',
            'premios' => 'juego de platos y vasos',
            'id_usuario'=>1,
            'id_empresa' => 1,                
        ]);
        DB::table('campanhas')->insert([
            'nombre' => 'primavera',
            'nro_camp' => 11,
            'detalle' => 'campaña 11',
            'premios' => 'carteras',
            'id_usuario'=>1,
            'id_empresa' => 2,                
        ]);
        DB::table('campanhas')->insert([
            'nombre' => 'primavera y sol',
            'nro_camp' => 11,
            'detalle' => 'campaña 11',
            'premios' => 'perfume de insentivo',
            'id_usuario'=>1,
            'id_empresa' => 3,                
        ]);
        DB::table('campanhas')->insert([
            'nombre' => 'imperial',
            'nro_camp' => 10,
            'detalle' => 'campaña 10',
            'premios' => 'juego de platos y vasos',
            'id_usuario'=>2,
            'id_empresa' => 1,                
        ]);
        DB::table('campanhas')->insert([
            'nombre' => 'primavera',
            'nro_camp' => 11,
            'detalle' => 'campaña 11',
            'premios' => 'carteras',
            'id_usuario'=>2,
            'id_empresa' => 2,                
        ]);
        DB::table('campanhas')->insert([
            'nombre' => 'mi verano',
            'nro_camp' => 11,
            'detalle' => 'campaña 11',
            'premios' => 'perfume de insentivo',
            'id_usuario'=>2,
            'id_empresa' => 4,                
        ]);
        DB::table('campanhas')->insert([
            'nombre' => 'imperial',
            'nro_camp' => 10,
            'detalle' => 'campaña 10',
            'premios' => 'juego de platos y vasos',
            'id_usuario'=>3,
            'id_empresa' => 1,                
        ]);
        DB::table('campanhas')->insert([
            'nombre' => 'mi verano',
            'nro_camp' => 11,
            'detalle' => 'campaña 11',
            'premios' => 'perfume de insentivo',
            'id_usuario'=>3,
            'id_empresa' => 4,                
        ]);
    }
}
