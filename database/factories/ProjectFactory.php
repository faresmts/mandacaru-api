<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->random_int(),
            'project_owner_id' => User::factory()->create([
                'role' => User::ROLE_PROJECT_OWNER
            ]),
            'name' => fake()->name(),
            'description' => fake()->words()
        ];
    }
}
