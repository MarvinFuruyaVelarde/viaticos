<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ciudad::create(['descripcion'=>'LA PAZ', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'ORURO', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'POTOSI', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'COCHABAMBA', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'CHUQUISACA', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'TARIJA', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'SANTA CRUZ', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'BENI', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'PANDO', 'estado'=>'1']);
        Ciudad::create(['descripcion'=>'OTRA CIUDAD', 'estado'=>'1']);
    }
}
