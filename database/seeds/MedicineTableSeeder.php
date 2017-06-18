<?php

use Illuminate\Database\Seeder;
Use \App\Medicine;
use Faker\Factory as Faker;

class MedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,200) as $index){
            Medicine::create([
                'nombre' => $faker->lastName,
                'descripcion' => $faker->sentence(6,1)
            ]);
        }
    }
}