<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FollowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'follower_id' => $this->faker->numberBetween(1, 20),
            'followed_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
