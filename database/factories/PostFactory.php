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
        return [
            //mt_rand($minValue, $maxValue) buat ngegenerate angka random yg udh kita set range minimum dan maksimalnya di dalam parameternya.

            'title' => fake()->sentence(mt_rand(2,8)), 
            'slug' => fake()->slug(),
            'excerpt' => fake()->sentence(mt_rand(10,25)),
            'body' => fake()->paragraph(mt_rand(5,10)),
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,3)
        ];
    }
}
