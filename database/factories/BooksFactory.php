<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

                'name' =>  $this->faker->title(),
                'description' => $this->faker->sentences(3, true),
                'status' => 0,
                'published' => $this->faker->date()

        ];
    }
}
