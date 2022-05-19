<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = \Str::slug($title);
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraph,
        ];
    }
}
