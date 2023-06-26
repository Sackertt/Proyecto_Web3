<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cuentas')->insert([
            ['user' => 'Artista1','password' => Hash::make('1234'),'nombre'=>'Artista','apellido'=>'1' ,'perfil_id'=>1],           
            ['user' => 'Artista2','password' => Hash::make('5678'),'nombre'=>'Artista','apellido'=>'2','perfil_id'=>1],
            ['user' => 'Admin1','password' => Hash::make('8899'),'nombre'=>'Admin','apellido'=>'1','perfil_id'=>2],
        ]);
    }
}
