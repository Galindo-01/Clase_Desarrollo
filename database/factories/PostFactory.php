<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence(7),
            'body'=>$this->faker->text(),
            'user_id'=> User::factory(),
            'status'=> $this->faker->randomElement(
                ['draft', 'published']),
        ];
    }
}
