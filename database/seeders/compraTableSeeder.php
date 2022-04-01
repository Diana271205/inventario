<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class compraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'cantidad' => Str::random(10),
            'fecha' => date ('DD MM AA', time()),
            'hora' => date ('H:M:S',time()),
            'valor_total' => mt_rand(0,1000),
            'id_producto' => '1',
            ]);
    }
}
