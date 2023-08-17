<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();
 


       \App\Models\Report::factory()->create([
            'consultant_id' => '99d84e64-c638-4901-b51d-5ea3b6577e3a',
            'vehicle_id' => '99d858d4-6807-4670-ba62-a7a264adbca8', 
            'report_status' => 'A',
            'status' => 'A',
            'observation' => 'Aprovado com ressalvas'
        ]);
    }
}
