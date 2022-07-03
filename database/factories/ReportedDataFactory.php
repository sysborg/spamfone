<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReportedData>
 */
class ReportedDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $contact_type = $this->faker->numberBetween(1, 3);
        $reported = in_array($contact_type, [1, 3]) ? $this->faker->e164PhoneNumber() : $this->faker->email();

        return [
            'reported_data' => $reported,
            'country_id' => $this->faker->numberBetween(1,2),
            'contact_type_id' => $contact_type,
            'avg_grade' => 0
        ];
    }
}
