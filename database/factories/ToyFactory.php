<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Child;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toy>
 */
class ToyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'child_id' => Child::all()->random(),
            'image' => fake()->text(),
            'condition' => fake()->date(),
            'price' => fake()->randomNumber($nbDigits = 2, $strict = false),
            'description' => fake()->paragraph(),
            'material' => fake()->text(),
        ];
    }
}
