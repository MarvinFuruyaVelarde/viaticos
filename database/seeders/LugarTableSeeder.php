<?php

namespace Database\Seeders;

use App\Models\Lugar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LugarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lugar::create(['descripcion'=>'ALCANTARI', 'ciudad'=>'4', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'APOLO', 'ciudad'=>'1', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'ASCENCION DE GUARAYOS', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'BERMEJO', 'ciudad'=>'5', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'CAMIRI', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'CHARAÑA', 'ciudad'=>'1', 'frontera'=>'1', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'CHIMORE', 'ciudad'=>'6', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'COBIJA', 'ciudad'=>'9', 'frontera'=>'1', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'COCHABAMBA', 'ciudad'=>'6', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'CONCEPCIÓN', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'COPACABANA', 'ciudad'=>'1', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'EL ALTO', 'ciudad'=>'1', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'GUAYARAMERIN', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'LA PAZ', 'ciudad'=>'1', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'MAGDALENA', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'MONTEAGUDO', 'ciudad'=>'4', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'ORURO', 'ciudad'=>'2', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'OTROS INTRADEPARTAMENTALES', 'frontera'=>'0', 'ciudad'=>null, 'estado'=>'1']);
        Lugar::create(['descripcion'=>'OTROS INTERDEPARTAMENTALES', 'frontera'=>'0', 'ciudad'=>'10', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'PANDO', 'ciudad'=>'9', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'POTOSI', 'ciudad'=>'3', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'PUERTO SUAREZ', 'ciudad'=>'7', 'frontera'=>'1', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'REYES', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'RIBERALTA', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'ROBORÉ', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'RURRENABAQUE', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN BORJA', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN IGNACIO DE MOXOS', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN IGNACIO DE VELASCO', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN JAVIER', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN JOAQUIN', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN JOSE DE CHIQUITOS', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN MATIAS', 'ciudad'=>'7', 'frontera'=>'1', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SAN RAMON / MAMORE', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SANTA ANA DEL YACUMA', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SANTA CRUZ', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SANTA ROSA DEL YACUMA', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'SUCRE', 'ciudad'=>'4', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'TARIJA', 'ciudad'=>'5', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'TRINIDAD', 'ciudad'=>'8', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'UYUNI', 'ciudad'=>'3', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'VALLEGRANDE', 'ciudad'=>'7', 'frontera'=>'0', 'estado'=>'1']);
        Lugar::create(['descripcion'=>'YACUIBA', 'ciudad'=>'5', 'frontera'=>'1', 'estado'=>'1']);
    }
}
