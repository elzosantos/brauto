<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     //   \App\Models\Report::factory(10)->create();
 
    
       \App\Models\Evaluation::factory()->create([
            'report_id' => '99d859b7-83ad-416c-af65-35bbe88432a7',
            'item_id' => '99d8544d-cdb7-4f9f-b338-62407893bef5',
            'status_item' => 'Aprovado',
            'observation' => 'Com ressalvas', 
            'status' => '1'
        ]);
    }
}
