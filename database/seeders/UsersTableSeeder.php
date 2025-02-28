<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*User::create([
            "name"=>'Super Administrador',
            "segundo_nombre"=>'Super Administrador',
            "apellido_paterno"=>'Super Administrador',
            "apellido_materno"=>'Super Administrador',
            'email'=>'superadmin@gmail.com',
            'ci'=>'12345678',
            'expedido'=>'1',
            'estado'=>'1',
            'password'=>bcrypt('9876543210*'),
        ])->assignRole('superadmin');*/

        $user1 = User::create([
            "name" => 'SUPER ADMINISTRADOR',
            "segundo_nombre" => 'SUPER ADMINISTRADOR',
            "apellido_paterno" => 'SUPER ADMINISTRADOR',
            "apellido_materno" => 'SUPER ADMINISTRADOR',
            'email' => 'superadmin@gmail.com',
            'ci' => '12345678',
            'expedido' => '1',
            'estado' => '1',
            'password' => bcrypt('9876543210*'),
        ]);
        $user1->assignRole('superadmin');

        $user2 = User::create([
            "name" => 'TANIA',
            "segundo_nombre" => '',
            "apellido_paterno" => 'RAMALLO',
            "apellido_materno" => 'POZO',
            'email' => 'tania.ramallo@naabol.gob.bo',
            'ci' => '3467266',
            'expedido' => '1',
            'estado' => '1',
            'password' => bcrypt('3467266'),
        ]);
        $user2->assignRole('ADMINISTRADOR');
    }
}
