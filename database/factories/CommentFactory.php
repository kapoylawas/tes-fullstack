<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'post_id' => Post::inRandomOrder()->first()->id,
            'name' => $name,
            'email' => $this->faker->email,
            'website' => preg_replace('/\s+/', '', strtolower($name)).'.com',
            'comment' =>$this->faker->sentence
        ];
    }
}
