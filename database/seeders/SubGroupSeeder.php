<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubGroupSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();

    
       \App\Models\Subgroup::factory()->create([
            'group_id' => '99d84f73-87fc-4392-a8fb-cfbfd8f47541', 
            'name' => 'Documentos', 
            'status' => '1'
        ]);
    }
}
