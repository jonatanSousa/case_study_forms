<?php

namespace Database\Factories;

use App\Models\Forms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forms>
 */
class FormsFactory extends Factory
{

    protected $model = \App\Models\Forms::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
