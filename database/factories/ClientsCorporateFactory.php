<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientsCorporateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_code' => $this->faker->unique()->randomNumber(5),
            'client_name' => $this->faker->company(),
            // 'client_image' => null,
            'client_color_legend' => $this->faker->colorName(),

            'house_number' => $this->faker->buildingNumber(),
            'barangay_district' => $this->faker->streetAddress(),
            'city_municipality' => $this->faker->city(),
            'province_region' => $this->faker->countryCode(),
            'country' => $this->faker->country(),

            'industry' => $this->faker->companySuffix(),
            'client_email' => $this->faker->unique()->safeEmail,
            'client_contact_number' => $this->faker->unique()->phoneNumber(),
            'website' => $this->faker->url(),
            'socmed_platforms' => json_encode(["key" => $this->faker->shuffleString()] )
        ];
    }
}
