<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productIds = Product::pluck('id')->toArray();

        return [
            'username' => $this->faker->name(),
            'text' => $this->faker->text(128),
            'rate' => $this->faker->numberBetween(1, 5),
            'product_id' => $this->faker->randomElement($productIds),
        ];
    }
}
