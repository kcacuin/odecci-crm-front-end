<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactPerson>
 */
class ContactPersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            // 'middle_name' => $this->faker->firstName(),

            'house_number' => $this->faker->buildingNumber(),
            'barangay_district' => $this->faker->streetAddress(),
            'city_municipality' => $this->faker->city(),
            'province_region' => $this->faker->countryCode(),
            'country' => $this->faker->country(),

            'position' => $this->faker->jobTitle(),
            'email' => $this->faker->unique()->safeEmail,
            'contact_number' => $this->faker->unique()->phoneNumber(),
        ];
    }
}
