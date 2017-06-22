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

        for ($i = 0; $i < 500; $i++)
            DiagnosticMedicine::create([
                'diagnostic_id' => rand(1, 100),
                'medicine_id' => rand(1, 100),
            ]);
    }
}