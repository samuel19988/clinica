<?php

use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { $faker=Faker::create();
      for($i=0;i<1000; $i++)
          Exam:: create([
              'nombre'=> $faker-> sentence(3,true),
              'descripcion'=> $faker-> sentense(12, true),
              'tipo'=> $faker->(rand(0,1)==1)? 'Laboratorio':'Rayos X, Gamma, Alpha',
              'patient id'=> rand(1,500)
          ]);

        //
    }
}
