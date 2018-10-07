<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nombre'=> 'Yambal',
            'foto'=> 'yambal.jpg',  
        ]);

        DB::table('empresas')->insert([
            'nombre'=> 'Esika',
            'foto'=> 'esika.jpg',  
        ]);
        DB::table('empresas')->insert([
            'nombre'=> 'CyZone',
            'foto'=> 'son.jpg',  
        ]);
        DB::table('empresas')->insert([
            'nombre'=> 'Lebel',
            'foto'=> 'lebel.jpg',  
        ]);

    }

}
