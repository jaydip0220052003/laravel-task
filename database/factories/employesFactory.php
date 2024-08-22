<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 *  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class employesFactory extends Factory
{
    protected $model = Employe::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'department_id'=>fake()->numberBetween(0,3),
            'salary'=>fake()->numberBetween(50000, 150000), 
        ];
    }
}
