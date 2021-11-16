<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'origin_city' => $this->faker->state(),
             'destination_city' => $this->faker->state(),
             'departure_date' => now()
        ];
    }
}
