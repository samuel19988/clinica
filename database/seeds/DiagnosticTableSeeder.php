<?php

use Illuminate\Database\Seeder;
Use \App\Diagnostic;
use Faker\Factory as Faker;
class DiagnosticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<100; $i++){
            Diagnostic::create([
                'nombre' => $faker->lastName,
                'descripcion' => $faker->sentence(6,1),
            ]);
        }
    }
}
