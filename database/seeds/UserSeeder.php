<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'magui',
            'last_name'=> 'davila',
            'email'=> 'magui19.jems@gmail.com',
            'user'=> 'magui123',
            'phone'=> '73715301',
            'password'=> bcrypt('123456'),
            
        ]);
        DB::table('users')->insert([
            'name'=> 'fernando',
            'last_name'=> 'alvarez',
            'email'=> 'fernandoAC@gmail.com',
            'user'=> 'fernandoA',
            'phone'=> '73020400',
            'password'=> bcrypt('123456'),
            
        ]);
        DB::table('users')->insert([
            'name'=> 'zeleste',
            'last_name'=> 'zelada',
            'email'=> 'zeleste123@gmail.com',
            'user'=> 'zelestejaja',
            'phone'=> '72539854',
            'password'=> bcrypt('123456'),
            
        ]);
    }
}
