<?php

namespace Database\Seeders;

use App\Models\Test1\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::factory(5)->create();
    }
}
