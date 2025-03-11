<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tiers>
 */
class TierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => json_encode([
                'en' => $this->faker->randomElement(['Tier 1', 'Tier 2', 'Tier 3', 'Tier 4']),
                'ar' => $this->faker->randomElement(['Tier 1', 'Tier 2', 'Tier 3', 'Tier 4']),

            ]),
            'price_per_1000_views' => $this->faker->randomElement([30, 20, 15, 7]),
            'color' => $this->faker->hexColor(),
        ];
    }
}
