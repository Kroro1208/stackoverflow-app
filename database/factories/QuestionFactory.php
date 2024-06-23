<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = rtrim($this->faker->sentence(rand(5, 10)), ".");
        return [
            'title' => rtrim($this->faker->sentence(rand(5, 10)), "."),
            'slug' => Str::slug($title),
            'body' => implode("\n\n", $this->faker->paragraphs(rand(3, 5))),
            'view' => $this->faker->numberBetween(0, 10),
            'answers' => $this->faker->numberBetween(0, 10),
            'votes' => $this->faker->numberBetween(-3, 10),
            'best_answer_id' => $this->faker->optional()->randomNumber(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
