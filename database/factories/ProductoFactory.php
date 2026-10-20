<?php

namespace Database\Factories;

use App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->sentence(50),
            'category'=>$this->faker->randomElement([
                'comida', 'electronica', 'hogar'
            ]),
            'description'=>$this->faker->text(),
            'price'=>$this->faker->randomFloat(2, 10, 100),
        ];
    }
}
