<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    
    public function definition()
    {
        return [
            'pais'=> $this->faker->country
        ];
    }
}
