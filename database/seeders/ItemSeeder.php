<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();

    
       \App\Models\Item::factory()->create([
            'name' => 'Número de chassi no documento',
            'subgroup_id' => '99d8510d-73b2-48db-a28b-78ae5b3b539e',
            'status' => '1'
        ]);
    }
}
