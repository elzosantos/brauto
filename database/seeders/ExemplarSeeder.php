<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExemplarSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();

       \App\Models\Exemplar::factory()->create([
            'brand_id' => '99d84eb2-8e93-498f-8feb-bb2971a3bc70',
            'exemplar' => 'i30'
             
        ]);
    }
}
