<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
        'descripcion' => Str::random(10),
        'precio' => mt_rand(0,200000),
        'stock' => Str::random(10),
        'iva' => mt_rand(0,1000),
        'id_presentacion' => '1',
        'id_proveedor' => '1',
        'id_marca' => '1',
        ]);
    }
}
