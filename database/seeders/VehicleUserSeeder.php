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
            'vehicle_id' => '99d67f38-c40d-4273-a8e8-63f9ebfdefd2',
            'user_id' => '99d67076-e322-45b7-9841-643bb8c5905d',
            'status' => '1'
        ]);
    }
}
