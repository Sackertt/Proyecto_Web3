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
            ['user' => 'Artista1','password' => Hash::make('artista1'),'nombre'=>'Artista','apellido'=>'1' ,'perfil_id'=>1],           
            ['user' => 'Admin1','password' => Hash::make('admin8899'),'nombre'=>'Admin','apellido'=>'1','perfil_id'=>2],
        ]);
    }
}
