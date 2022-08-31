<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition ()
    {
        return [
            'title'     => $this->faker->words(3, true),
            'price'     => $this->faker->randomElement([3000, 5000, 6000, 9000, 15000, 10000, 4500, 1500, 9500, 6800]),
            'old_price' => $this->faker->randomElement([3000, 5000, 6000, 9000, 15000, 10000, 4500, 1500, 9500, 6800]),
        ];
    }
}
