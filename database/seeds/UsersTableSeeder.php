<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Sofia Munoz",
            'email' => 'sofimunoz97@outlook.com',
            'password' => bcrypt('123456'),
            'rut' => '1-9',
            'rol' => 'medico',
            'especialidad' => 'Oncologia'
        ]);
        User::create([
            'name' => "Samuel Munoz",
            'email' => 'samuel.munoz.f@gmail.com',
            'password' => bcrypt('123456'),
            'rut' => '2-7',
            'rol' => 'medico',
            'especialidad' => 'ginecologo jefe del seba'
        ]);
        User::create([
            'name' => "Leonardo Hidalgo",
            'email' => 'lhidalgosep@gmail.com',
            'password' => bcrypt('123456'),
            'rut' => '3-6',
            'rol' => 'medico',
            'especialidad' => 'hola'
        ]);
        User::create([
            'name' => "Sebastián Montoya",
            'email' => 'smontoya@alumnos.uai.cl',
            'password' => bcrypt('123456'),
            'rut' => '6-9',
            'rol' => 'medico',
            'especialidad' => 'enologo'
            ]);
        User::create([
            'name' => "Josefina Vitulich",
            'email' => 'jvitulich@alumnos.uai.cl',
            'password' => bcrypt('123456'),
            'rut' => '6-9',
            'rol' => 'medico',
            'especialidad' => 'influenciologa'
        ]);
    }
}
