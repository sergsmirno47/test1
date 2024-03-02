<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'blog_id' => Blog::inRandomOrder()->first()->id,
            'tag_id' => Tag::inRandomOrder()->first()->id,
        ];
    }
}
