<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $likeable_type =  $faker->randomElements(['collection','item']);
        $likeable_id = 1;
        if($likeable_type == 'collection'){
            $likeable_id =$faker->numberBetween(1, 6);
        }else{
            $likeable_id =$faker->numberBetween(1, 150);
        }



        return [
            //
            'user_id' => $faker->numberBetween(1, 60),
            'likeable_type' => $likeable_type,
            'likeable_id' => $likeable_id
        ];
    }
}
