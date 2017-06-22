<?php

use Illuminate\Database\Seeder;
Use \App\patient;
use Faker\Factory as Faker;
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
        for ($i = 0; $i < 10; $i++) {
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
