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
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));


        return [
            'image' => $faker->imageUrl($width = 310, $height = 320),
            'price' => $faker->randomFloat(),
            'title' => fake()->words(),
            'royalties' => $faker->randomFloat(),
            'size' => $faker->word(),
            'collection_id' => $faker->numberBetween(1, 6),
            'category_id' => $faker->numberBetween(1, 8),
            'author_id' => $faker->numberBetween(1, 25)
        ];
    }
}
