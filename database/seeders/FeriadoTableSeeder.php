<?php

namespace Database\Seeders;

use App\Models\Feriado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeriadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feriado::create(['descripcion'=>'AÑO NUEVO', 'fecha'=>'2025-01-01', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'DIA DEL ESTADO PLURINACIONAL DE BOLIVIA', 'fecha'=>'2025-01-22', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'CARNAVAL', 'fecha'=>'2025-03-03', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'CARNAVAL', 'fecha'=>'2025-03-04', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'VIERNES SANTO', 'fecha'=>'2025-04-18', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'DIA DEL TRABAJO', 'fecha'=>'2025-05-01', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'CORPUS CHRISTI', 'fecha'=>'2025-06-19', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'AÑO NUEVO AYMARA', 'fecha'=>'2025-06-21', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'DIA DE LA INDEPENDENCIA', 'fecha'=>'2025-08-06', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'DIA DE TODOS LOS DIFUNTOS', 'fecha'=>'2025-11-02', 'estado'=>'1']);
        Feriado::create(['descripcion'=>'NAVIDAD', 'fecha'=>'2025-12-25', 'estado'=>'1']);
    }
}
