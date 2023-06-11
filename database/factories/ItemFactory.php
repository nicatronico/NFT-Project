<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'image' => fake()->imageUrl($width = 310, $height = 320),
            'price' => $faker->randomFloat(),
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'royalties' => fake()->sentence(),
            'size' => fake()->word(),
            'collection_id' => fake()->numberBetween(1, 6),
            'category_id' => fake()->numberBetween(1, 8),
            'author_id' => fake()->numberBetween(1, 25)
        ];
    }
}
