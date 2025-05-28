<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "product_name" => $this->faker->text(50),
            "quantity" => $this->faker->numberBetween(1,50),
            "price" => $this->faker->numberBetween(100,1000),
            "desciption" => $this->faker->text(300),
            "created_at" => now(),
            "updated_at"=> now(),
        ];
    }
}

/*
    pel yg add data jol tam factory kue vea random oy mg

    hx yg yk vea tv use knong DatabaseSeeder
*/