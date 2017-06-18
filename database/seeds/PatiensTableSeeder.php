<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Patient;

class PatientsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 500; $i++) {
            Patient::create([
                'nombre' => $faker->name,
                'apellido' => $faker->lastName,
                'rut' => rand(300, 123456),
                'fecha' => $faker->date(),
                'email' => $faker->email,
                'telefono' => $faker->phoneNumber
            ]);
        }
    }
}