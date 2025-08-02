<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug'=> $this->faker->slug(),
            'user_id' => User::inRandomOrder()->value('id'),
            'title' => $this->faker->sentence(20),
            'description' => $this->faker->sentence(50),
        ];
    }
}
