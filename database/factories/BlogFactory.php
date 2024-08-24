<?php

namespace Database\Factories;

use App\Enums\BlogStatus;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    protected $model = Blog::class;
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'user_email' => 'demotest@gmail.com',
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->text,
            'content' => $this->faker->paragraph,
            'status_blog' => BlogStatus::Waiting,
            'publish_date' => now(),
        ];
    }
}
