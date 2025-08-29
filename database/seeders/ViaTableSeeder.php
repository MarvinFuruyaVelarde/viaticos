<?php

namespace Database\Seeders;

use App\Models\Via;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Via::create(['descripcion'=>'AEREA', 'estado'=>'1']);
        Via::create(['descripcion'=>'FLUVIAL', 'estado'=>'1']);
        Via::create(['descripcion'=>'TERRESTRE', 'estado'=>'1']);
    }
}
