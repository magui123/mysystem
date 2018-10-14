<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Leticia',
            'apellido' => 'Gutierrez',
            'telefono' => '68214070',
            'procedencia' => 'familia',
            'whatsapp'=>0,
            'facebook'=>'leticia gutierrez',
            'detalle' => 'le gusta las cremas antiarrugas y joyas',   
            'id_usuario' => 1,             
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Maria',
            'apellido' => 'Davila',
            'telefono' => '62548946',
            'procedencia' => 'familia',
            'whatsapp'=>0,
            'facebook'=>'maria eugenia davila',
            'detalle' => 'le gusta todo tipo de crema',  
            'id_usuario' => 1,              
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Yamil',
            'apellido' => 'Davila',
            'telefono' => '75689745',
            'procedencia' => 'familia',
            'whatsapp'=>1,
            'facebook'=>'yamil Davila',
            'detalle' => 'lle gusta los perfumes', 
            'id_usuario' => 1,               
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Magui',
            'apellido' => 'Davila',
            'telefono' => '73715301',
            'procedencia' => 'novia',
            'whatsapp'=>1,
            'facebook'=>'magui davila gutierrez',
            'detalle' => 'le gusta todo',   
            'id_usuario' => 1,             
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Nicole',
            'apellido' => 'Alvarez',
            'telefono' => '75489646',
            'procedencia' => 'familia',
            'whatsapp'=>0,
            'facebook'=>'-',
            'detalle' => 'le gusta los aretes pequeños',    
            'id_usuario' => 1,            
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Brayan',
            'apellido' => 'Davila',
            'telefono' => '73222311',
            'procedencia' => 'hospital Vagio',
            'whatsapp'=>0,
            'facebook'=>'brayan davila',
            'detalle' => 'dr. pediatra, le gusta los perfumes',      
            'id_usuario' => 1,          
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Ana',
            'apellido' => 'gonzales',
            'telefono' => '75248646',
            'procedencia' => 'universidad',
            'whatsapp'=>0,
            'facebook'=>'anita gonzales',
            'detalle' => 'le gusta maquillaje',    
            'id_usuario' => 1,            
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Laura',
            'apellido' => 'Cespedez',
            'telefono' => '76589785',
            'procedencia' => 'wally',
            'whatsapp'=>1,
            'facebook'=>'laura daniela',
            'detalle' => 'le gustan las joyas',   
            'id_usuario' => 1,             
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Brenda',
            'apellido' => 'Mariscal',
            'telefono' => '75955694',
            'procedencia' => 'piscina',
            'whatsapp'=>1,
            'facebook'=>'brenda MD',
            'detalle' => 'le gustan las cremas corporales',  
            'id_usuario' => 2,              
        ]);
    }
}
