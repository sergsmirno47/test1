<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BlogTag;
use Database\Factories\BlogTagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
//        \App\Models\Blog::factory(100)->create();
//        BlogTag::factory(300)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            FilmSeeder::class,
            GenreSeeder::class,
            FilmGenreSeeder::class,
        ]);
    }
}
