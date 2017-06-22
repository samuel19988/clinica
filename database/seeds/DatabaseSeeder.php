<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MedicineTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(ExamTableSeeder::class);
        $this->call(DiagnosticTableSeeder::class);
        $this->call(ExamDiagnosticTableSeeder::class);
        $this->call(MedicineDiagnosticTableSeeder::class);


    }
}
