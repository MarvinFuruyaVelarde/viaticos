<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuarios
        Permission::create(['descripcion'=>'Ver lista de usuarios','name'=>'users.index','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Registrar usuarios','name'=>'users.create','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Ver reporte de usuarios','name'=>'users.show','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Editar usuarios','name'=>'users.edit','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Eliminar usuarios','name'=>'users.destroy','grupo'=>'ADMINISTRACIÓN']);

        //Roles
        Permission::create(['descripcion'=>'Ver lista de roles','name'=>'roles.index','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Ver reporte de roles','name'=>'roles.show','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Registrar roles','name'=>'roles.create','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Editar roles','name'=>'roles.edit','grupo'=>'ADMINISTRACIÓN']);
        Permission::create(['descripcion'=>'Eliminar roles','name'=>'roles.destroy','grupo'=>'ADMINISTRACIÓN']);
        
        //Aeropuertos
        Permission::create(['descripcion'=>'Ver lista de viaticos','name'=>'viaticos.index','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Registrar viaticos','name'=>'viaticos.create','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Editar viaticos','name'=>'viaticos.edit','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Eliminar viaticos','name'=>'viaticos.destroy','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Enviar viatico para aprobar','name'=>'viaticos.send','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Ver boleta de pago de viatico','name'=>'viaticos.show','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Ver lista para aprobar viaticos','name'=>'aprobarviaticos.index','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Aprobar viaticos','name'=>'viaticos.aprobar','grupo'=>'VIATICOS']);
        Permission::create(['descripcion'=>'Ver lista de viaticos aprobados','name'=>'viaticoaprobados.index','grupo'=>'VIATICOS']);
    }
}
