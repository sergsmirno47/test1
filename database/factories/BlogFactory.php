<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => ucfirst(fake()->words(15, true)),
            'text' => ucfirst(fake()->words(250, true)),
            'img' => 'single_blog_' . fake()->numberBetween(1, 5) . '.png',
            'created_at' => fake()->dateTime(),
        ];
    }
}
