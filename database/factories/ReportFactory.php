<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
 
        return [
            'consultant_id' => fake()->uuid(),
            'vehicle_id' => fake()->uuid(),
            'report_status' => 'A',
            'status' => 'A',
            'observation' => fake()->text()
        ];
    }

   
}
