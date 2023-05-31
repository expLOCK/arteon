<?php

namespace Database\Factories;

use App\Models\City;
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
        $cityIds = City::pluck('id')->toArray();

        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 100, 1800),
            'count' => $this->faker->numberBetween(1, 50),
            'discount' => $this->faker->numberBetween(10, 30),
            'city_id' => $this->faker->randomElement($cityIds),
        ];
    }
}
