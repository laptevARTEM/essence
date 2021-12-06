<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->lexify(),
            'price' => $this->faker->randomFloat(2,200,1500),
            'alias' =>'',
            'new_price' => $this->faker->randomFloat(2,100,150),
            'description' => $this->faker->text(),
            'in_stock' => rand(0,1),
            'home_ten' => rand(0,1),
            'created_at' => $this->faker->date(),
        ];
    }
}
