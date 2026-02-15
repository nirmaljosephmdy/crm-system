<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LeaddFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'account_id' => $this->faker->numberBetween(1, 5),
            'organisation_id' => $this->faker->numberBetween(1, 100),
            'team_id' => $this->faker->numberBetween(1, 50),

            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female']),

            'company_name' => $this->faker->company(),
            'business' => $this->faker->randomElement(['0', '1']),

            'streetname' => $this->faker->streetName(),
            'housenumber' => $this->faker->buildingNumber(),
            'suffix' => 'A',
            'postcode' => substr($this->faker->postcode(), 0, 6),
            'city' => $this->faker->city(),

            'status' => 'active',

            'planned_user_id' => $this->faker->numberBetween(1, 10),
            'created_by' => $this->faker->numberBetween(1, 10),

            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }
}
