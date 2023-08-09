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
            'year' => '2011',
            'exemplar_id' => '99d84f00-1df8-4231-9de9-6897d0422060',
            'color' => 'Branco',
            'version' => '2.0 AT',
            'renavam' => '9212199',
            'status' => '1'
        ]);
    }
}
