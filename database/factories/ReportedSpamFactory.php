<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReportedSpam>
 */
class ReportedSpamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'spam_type_id' => $this->faker->numberBetween(1, 11),
            'reported_data_id' => $this->faker->numberBetween(1, 100),
            'ip' => $this->faker->ipv4(),
            'reported_name' => $this->faker->name(),
            'whistleblower_name' => $this->faker->name(),
            'comment' => $this->faker->realText(),
            'grade' => $this->faker->numberBetween(1, 10)
        ];
    }
}
