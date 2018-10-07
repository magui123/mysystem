<?php

use Illuminate\Database\Seeder;
USE Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        $this->truncateTable(
            [
                'users',
                'empresas',
                'usuario_empresas',
                'productos',
                'campanhas',
                'clientes',
                'ventas',
                'pagos',
            ]

        );
        $this->call(UserSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(UsuarioEmpresaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(CampanhaSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(VentaSeeder::class);
        $this->call(PagoSeeder::class);
        
        Model::reguard();

    }
    protected function truncateTable(array $table)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach($table as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
