<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'bb cream',
            'descripcion' => 'Crema para el rodtro hidratanre',
            'codigo' => '14',
            'id_usuario' => 1,
            'id_empresa' => 1,                
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Aloe vera',
            'descripcion' => 'Crema para el rodtro hidratanre',
            'codigo' => '20',
            'id_usuario' => 1,
            'id_empresa' => 1,                
        ]); 
        DB::table('productos')->insert([
            'nombre' => 'crema de quinua',
            'descripcion' => 'Crema para el cuerpo hidratanre',
            'codigo' => '22',
            'id_usuario' => 1,
            'id_empresa' => 1,                
        ]); 
        DB::table('productos')->insert([
            'nombre' => 'Aron',
            'descripcion' => 'perfume para varon',
            'codigo' => '23',
            'id_usuario' => 1,
            'id_empresa' => 1,                
        ]); 
        DB::table('productos')->insert([
            'nombre' => 'tentation mujer',
            'descripcion' => 'perfume para mujer',
            'codigo' => '24',
            'id_usuario' => 1,
            'id_empresa' => 1,                
        ]); 
        DB::table('productos')->insert([
            'nombre' => 'rimel',
            'descripcion' => 'rimel para pestañar',
            'codigo' => '16',
            'id_usuario' => 1,
            'id_empresa' => 2,                
        ]); 
        DB::table('productos')->insert([
            'nombre' => 'Magnate',
            'descripcion' => 'Perfume para varon',
            'codigo' => '123',
            'id_usuario' => 1,
            'id_empresa' => 2,                
        ]); 
        DB::table('productos')->insert([
            'nombre' => 'vanidad',
            'descripcion' => 'Perfume para mujer',
            'codigo' => '12',
            'id_usuario' => 1,
            'id_empresa' => 2,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'blusa ',
            'descripcion' => 'blusa talla M',
            'codigo' => '43',
            'id_usuario' => 1,
            'id_empresa' => 3,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'labial Nude ',
            'descripcion' => 'labial mate',
            'codigo' => '50',
            'id_usuario' => 1,
            'id_empresa' => 3,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'rimel azul ',
            'descripcion' => 'rimel para pestañas',
            'codigo' => '60',
            'id_usuario' => 1,
            'id_empresa' => 3,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'crema liporeductora',
            'descripcion' => 'Crema liporeductora para cintura',
            'codigo' => '100',
            'id_usuario' => 2,
            'id_empresa' => 1,                
        ]); 
        DB::table('productos')->insert([
            'nombre' =>'concha nacar',
            'descripcion' => 'Crema para rostro maduro',
            'codigo' => '10',
            'id_usuario' => 2,
            'id_empresa' => 1,                
        ]); 
        DB::table('productos')->insert([
            'nombre' => 'totalblok F100',
            'descripcion' => 'protector solar F100',
            'codigo' => '80',
            'id_usuario' => 2,
            'id_empresa' => 1,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'coleccion taysa',
            'descripcion' => 'coleccion de artes y collar',
            'codigo' => '20',
            'id_usuario' => 2,
            'id_empresa' => 2,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'crema corporal luz',
            'descripcion' => 'crema para cuerpo',
            'codigo' => '21',
            'id_usuario' => 2,
            'id_empresa' => 2,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'antiarrugas',
            'descripcion' => 'crema antiarrugas +56',
            'codigo' => '12',
            'id_usuario' => 2,
            'id_empresa' => 4,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'cielo',
            'descripcion' => 'perfume para mujer',
            'codigo' => '29',
            'id_usuario' => 2,
            'id_empresa' => 4,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'delineador punta plumom',
            'descripcion' => 'delineador negro',
            'codigo' => '15',
            'id_usuario' => 3,
            'id_empresa' => 1,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'BB cream',
            'descripcion' => 'crema hidratante',
            'codigo' => '14',
            'id_usuario' => 3,
            'id_empresa' => 1,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'crece extreme',
            'descripcion' => 'rimel para pestañas',
            'codigo' => '12',
            'id_usuario' => 3,
            'id_empresa' => 1,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'quinua',
            'descripcion' => 'crema corporal de quinua',
            'codigo' => '22',
            'id_usuario' => 3,
            'id_empresa' => 1,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Aloe vera',
            'descripcion' => 'crema para rostro joven',
            'codigo' => '20',
            'id_usuario' => 3,
            'id_empresa' => 1,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'mush rojo',
            'descripcion' => 'perfume para mujer',
            'codigo' => '88',
            'id_usuario' => 3,
            'id_empresa' => 1,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'antiarruga',
            'descripcion' => 'crema antiarrugas',
            'codigo' => '12',
            'id_usuario' => 3,
            'id_empresa' => 4,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Masajeadora',
            'descripcion' => 'crema para masajes',
            'codigo' => '33',
            'id_usuario' => 3,
            'id_empresa' => 4,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'rimel',
            'descripcion' => 'rimel para pestañas',
            'codigo' => '48',
            'id_usuario' => 3,
            'id_empresa' => 4,                
        ]);
        DB::table('productos')->insert([
            'nombre' => 'cielo',
            'descripcion' => 'perfume para mujer',
            'codigo' => '29',
            'id_usuario' => 3,
            'id_empresa' => 4,                
        ]);
    }
}
 