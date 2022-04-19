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
            'ref' => $this->faker->unique()->uuid(),
            'name' => $this->faker->name(),
            'bar_code' => $this->faker->ean13(),
            'price_without_vat' => $this->faker->numberBetween(1, 1000)
        ];
    }
}
