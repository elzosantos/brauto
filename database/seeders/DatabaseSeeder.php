<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\User::factory(30)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Juca Santos',
            'email' => 'juca@santos.com',
            'cpf' => '12122233305',
            'status' => 'A',
            'role_id' => 'A',
            'password' => '$2y$10$czuqpePaG8jGhXHUgaJjMudiTBG4bYgSTk4hwDiXEzVeRKH1nvouW'
        ]);

    }
}
