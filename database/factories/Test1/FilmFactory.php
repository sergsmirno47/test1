<?php

namespace Database\Factories\Test1;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'film ' . fake()->lastName,
            'url' => null,
            'status' => fake()->numberBetween(0, 1),
            'created_at' => now(),
        ];
    }
}
