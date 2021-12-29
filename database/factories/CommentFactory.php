<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    
    public function definition()
    {
        return [
            'detalle'=> $this->faker->sentence,
            'user_id'=> rand(1,5)
        ];
    }
}
