<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
use Faker\Factory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(10)->create()->each(function ($user) {
            $user->questions()->saveMany(
                Question::factory()->count(rand(1, 5))->make()
            );
        });
    }
}
