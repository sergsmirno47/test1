<?php

namespace Database\Factories\Test1;

use Illuminate\Database\Eloquent\Factories\Factory;

class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'genre ' . fake()->lastName,
            'created_at' => now(),
        ];
    }
}
