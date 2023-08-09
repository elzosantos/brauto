<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();
 

       \App\Models\Group::factory()->create([
            'name' => 'GRUPO 1 - HISTÓRICO E DADOS',
            'status' => '1'
        ]);
    }
}
