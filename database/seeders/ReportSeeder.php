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
            'consultant_id' => 'Elzo Santos',
            'client_id' => 'elzo@santos.com',
            'vehicle_id' => '22233344405',
            'report_status' => 'A',
            'status' => 'A',
            'password' => '$2y$10$czuqpePaG8jGhXHUgaJjMudiTBG4bYgSTk4hwDiXEzVeRKH1nvouW'
        ]);
    }
}
