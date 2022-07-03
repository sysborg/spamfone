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
        return [
            'reported_data' => '',
            'country_id' => '',
            'contact_type_id' => '',
            'avg_grade' => ''
        ];
    }
}
