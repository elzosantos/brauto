<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();

 
       \App\Models\Vehicle_user::factory()->create([
            'vehicle_id' => '99d8589e-2d3c-48e2-9a07-1124b6265cad',
            'user_id' => '99d8584b-f736-40f1-be07-0867957c81bc',
            'status' => '1'
        ]);
    }
}
