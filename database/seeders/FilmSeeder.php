<?php

namespace Database\Seeders;

use App\Models\Test1\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::factory(20)->create();
    }
}
