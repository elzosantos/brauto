<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();

    
       \App\Models\Vehicle::factory()->create([
            'year' => '2012',
            'exemplar_id' => '99d67c41-7d55-45bb-bf78-4a43f8d5ac12',
            'color' => 'Cinza',
            'version' => '2.0 MT',
            'renavam' => '999',
            'status' => '1'
        ]);
    }
}
