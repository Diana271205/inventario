<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class clienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => Str::random(12),
            'apellido' => Str::random(10),
            'identificacion' => Str::random(10),
            'tipo' => Str::random(10),
            'direccion' => Str::random(10),
            'telefono' => Str::random(10),
            ]);
    }
}
