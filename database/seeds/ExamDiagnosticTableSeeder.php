<?php

use Illuminate\Database\Seeder;
use \App\ExamDiagnostic;
//use Faker\Factory as Faker;
class ExamDiagnosticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  $faker = Faker::create();
        for ($i = 0; $i < 500; $i++)
            ExamDiagnostic::create([
                'diagnostic_id' => rand(1, 100),
                'exam_id' => rand(1, 100),
            ]);
    }
}
