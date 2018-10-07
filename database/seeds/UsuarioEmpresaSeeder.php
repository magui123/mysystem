<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsuarioEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 1,
            'id_empresa'=> 1,  
        ]);


        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 1,
            'id_empresa'=> 2,  
        ]);

        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 1,
            'id_empresa'=> 3,  
        ]);
        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 2,
            'id_empresa'=> 1,  
        ]);
        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 2,
            'id_empresa'=> 2,  
        ]);
        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 2,
            'id_empresa'=> 4,  
        ]);
        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 3,
            'id_empresa'=> 1,  
        ]);
        DB::table('usuario_empresas')->insert([
            'id_usuario'=> 3,
            'id_empresa'=> 4,  
        ]);
       
    }
}
