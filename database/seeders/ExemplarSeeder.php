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
            'brand_id' => '99d67a57-a481-4fd7-9d7c-c885d5c92672',
            'exemplar' => 'i30'
             
        ]);
    }
}
