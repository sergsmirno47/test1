<?php

namespace Database\Factories\Test1;

use App\Models\Test1\Film;
use App\Models\Test1\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmGenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'film_id' => Film::inRandomOrder()->first()->id,
            'genre_id' => Genre::inRandomOrder()->first()->id,
        ];
    }
}
