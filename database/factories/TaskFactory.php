<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'board_id' => Board::factory()->create()->getKey(),
            'owner_id' => User::factory()->create([
                'role' => User::ROLE_OWNER
            ])->getKey(),
            'holder_id' => User::factory()->create([
                'role' => User::ROLE_HOLDER

            ]),
            'viewers_ids' => [
                User::factory()->create([
                    'role' => User::ROLE_VIEWER
                ])->getKey(),
                User::factory()->create([
                    'role' => User::ROLE_VIEWER
                ])->getKey(),
            ],
            'name' => fake()->name(),
            'description' => fake()->words(), 
            'type' => fake()->word(),
            'status' => fake()->word(),
            'due_date' => fake()->date(),
            'label' => fake()->word(),
            'logs' => fake()->words()
        ];
    }
}
