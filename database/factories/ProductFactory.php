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
    public function definition(): array
    {
        return [
        'name' => $this->faker->word,
        'description' => $this->faker->sentence,
        'price' => $this->faker->randomNumber(2, 0, 100),
        'category' => $this->faker->randomElement(['Electronics', 'Clothing', 'Books', 'Home', 'Sports']),
        'discount' => $this->faker->numberBetween(0, 50),
        ];
    }
}
