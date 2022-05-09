<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ReportedSpam;

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
            'contact_type_id'   => $this->faker->numberBetween(1, 3), 
            'spam_type_id'      => $this->faker->numberBetween(1, 11), 
            'ip'                => $this->faker->ipv4(), 
            'caller_name'       => $this->faker->name(), 
            'reported_name'     => $this->faker->name(), 
            'description'       => $this->faker->realText(), 
            'grade'             => $this->faker->numberBetween(0, 9), 
            'cell'              => $this->faker->e164PhoneNumber(), 
            'email'             => $this->faker->email()
        ];
    }
}
