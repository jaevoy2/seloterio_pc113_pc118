<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PracticeOrder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PracticeOrder>
 */
class PracticeOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => $this->faker->name(),
            'product' => $this->faker->word(),
            'address' => $this->faker->address(),
            'price' => $this->faker->randomFloat(2, 50, 1000),
            'status' => 'to_be_deliver',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
