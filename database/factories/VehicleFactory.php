<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         
        return [
            'exemplar_id' => '5071',
            'user_id' => '5071',
            'year' => fake()->numberBetween('2009', '2012'),
            'color' => fake()->name(),
            'tag' => fake()->name(),
            'renavam' => fake()->name(),
            'km' => fake()->numberBetween('1000', '100000'),
            'status' => '1'

             
        ];
    }

 
}
