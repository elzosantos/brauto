<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();

       \App\Models\Brand::factory()->create([
            'name' => 'Hyundai' 
        ]);
    }
}
