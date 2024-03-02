<?php

namespace Database\Seeders;

use App\Models\Test1\FilmGenre;
use Illuminate\Database\Seeder;

class FilmGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FilmGenre::factory(40)->create();
    }
}
