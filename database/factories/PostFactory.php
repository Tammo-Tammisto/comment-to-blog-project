<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        $created = fake()->dateTimeBetween('-10 years', 'now');
        $updated = fake()->dateTimeBetween($created, 'now');
        if(rand(0,9)){
            $updated = $created;
        }
        $image = null;
        if(rand(0,9)){
            $image = 'https://picsum.photos/seed/'. fake()->uuid .'/1280/720';
        }
        return [
            'title' => fake()->sentence,
            'body' => fake()->paragraphs(6, true),
            'image' => $image,
            'created_at' => $created,
            'updated_at' => $updated,
        ];
    }
}
