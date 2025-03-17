<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'course' => $this->faker->randomElement(['Computer Science', 'Information Technology', 'Engineering', 'Business Management']),
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Default password
            'address' => $this->faker->address,
        ];
    }
}
