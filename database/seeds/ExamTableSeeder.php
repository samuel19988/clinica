<?php

use Illuminate\Database\Seeder;
Use \App\Exam;
use Faker\Factory as Faker;
class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { $faker=Faker::create();
      for($i=0;$i<1000; $i++)
          Exam:: create(array(
              'nombre'=> $faker-> sentence(3,true),
              'descripcion'=> $faker-> sentence(12,true),
              'tipo'=> (rand(0,1)==1)? 'Laboratorio':'Rayos X, Gamma, Alpha',
              'patient_id'=> rand(1,500)
          ));

        
    }
}
