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
    public function definition()
    {
        return [
            'name' => fake()->sentence(3),
            'model'=> fake()->sentence(3),
            'description'=> fake()->text(500),
            'sale_price'=> fake()->randomFloat(2, 200, 2000),
            'purchase_price'=> fake()->randomFloat(2, 200, 2000),
            'quantity'=> fake()->randomNumber(5, true),
            'category'=>fake()->sentence(3),
            'image'=> fake()-> imageUrl($width=200,$height=200)

        ];
    }
}
