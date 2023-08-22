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
            'exemplar_id' => '5071',
            'user_id' => '99f2633b-e5e2-479b-a586-cb737f1008be',
            'year' => '2011', 
            'color' => 'Branco',
            'tag' => 'PXI4568',
            'renavam' => '9212199',
            'km' => '112199',
            'status' => '1'
        ]);
    }
}
