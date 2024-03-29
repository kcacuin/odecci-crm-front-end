<?php

namespace Database\Factories;

use App\Models\ContactPerson;
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
            'contact_person_id' => ContactPerson::factory(),
            'code' => $this->faker->unique()->randomNumber(5),
            'name' => $this->faker->company(),
            // 'image' => null,
            'color_legend' => $this->faker->colorName(),

            'house_number' => $this->faker->buildingNumber(),
            'barangay_district' => $this->faker->streetAddress(),
            'city_municipality' => $this->faker->city(),
            'province_region' => $this->faker->countryCode(),
            'country' => $this->faker->country(),

            'industry' => $this->faker->companySuffix(),
            'email' => $this->faker->unique()->safeEmail,
            'contact_number' => $this->faker->unique()->phoneNumber(),
            'website' => $this->faker->url(),
            'socmed_platforms' => json_encode(["key" => $this->faker->shuffleString()] )
        ];
    }
}
