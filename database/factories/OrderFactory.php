<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();

        return [
            'status' => $this->faker->randomElement(array_keys(Order::$statuses)),
            'user_id' => $this->faker->randomElement($userIds),
            'product_id' => $this->faker->randomElement($productIds),
        ];
    }
}
