<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'biografia'=> $this->faker->sentence,
            'github'=> $this->faker->userName,
            'website'=> $this->faker->url,
        ];
    }
}
