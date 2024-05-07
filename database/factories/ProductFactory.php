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
            'image' => $this->faker->url(),
            'name' => $this->faker->name(),
            'description' => $this->faker->realText(),
            'price' => $this->faker->randomDigit(),
            'quantity' => $this->faker->randomDigit(),
            'category_id' => 1,
            'view' => 0, // Thêm trường view với giá trị mặc định là 0
        ];
    }
}
