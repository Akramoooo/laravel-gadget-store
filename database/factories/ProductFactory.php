<?php

namespace Database\Factories;

use App\Models\Category;
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
            'prod_name' => $this->faker->text(20),
            'price' => random_int(200,60000),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
