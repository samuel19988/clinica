<?php

use Illuminate\Database\Seeder;
use \App\Exam;
use Faker\Factory as Faker;
class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { $faker = Faker ::create();
      for($i=0;$i<100; $i++)
          Exam:: create([
              'nombre'=> $faker->sentence(6,true),
              'descripcion'=> $faker->sentence(12,true),
              'tipo'=> (rand(0,1)==1)? "Laboratorio":"Rayos X",
              'patient_id'=> rand(1,10)
          ]);
    }
}
