<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'model' => $this->faker->name(),
            'max_speed' => $this->faker->numberBetween(200, 500),
            'horsepower' => $this->faker->numberBetween(120, 500),
            'driver_id' => $this->faker->numberBetween(1, 10),
            'manufacturer_id' => $this->faker->numberBetween(1, 10),

        ];
    }
}