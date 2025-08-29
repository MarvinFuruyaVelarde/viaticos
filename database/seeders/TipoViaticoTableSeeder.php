<?php

namespace Database\Seeders;

use App\Models\TipoViatico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoViaticoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoViatico::create(['descripcion'=>'INTERDEPARTAMENTAL', 'escala'=>'2', 'monto'=>'465', 'estado'=>'1']);
        TipoViatico::create(['descripcion'=>'INTERDEPARTAMENTAL', 'escala'=>'3', 'monto'=>'371', 'estado'=>'1']);
        TipoViatico::create(['descripcion'=>'INTRADEPARTAMENTAL', 'escala'=>'2', 'monto'=>'277', 'estado'=>'1']);
        TipoViatico::create(['descripcion'=>'INTRADEPARTAMENTAL', 'escala'=>'3', 'monto'=>'222', 'estado'=>'1']);
        TipoViatico::create(['descripcion'=>'FRONTERA', 'escala'=>'2', 'monto'=>'491', 'estado'=>'1']);
        TipoViatico::create(['descripcion'=>'FRONTERA', 'escala'=>'3', 'monto'=>'391', 'estado'=>'1']);
    }
}
