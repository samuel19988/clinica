<?php

use Illuminate\Database\Seeder;
use App\DiagnosticMedicine;

class DiagnosticMedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 5000; $i++)
            DiagnosticMedicine::create([
                'diagnostic_id' => rand(1, 1000),
                'medicine_id' => rand(1, 1000),
            ]);
    }
}