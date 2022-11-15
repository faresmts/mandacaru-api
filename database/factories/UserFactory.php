<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'role' => $this->role()
        ];
    }

    public function role()
    {
        $number = random_int(0, 3);
        
        switch ($number) {
            case 0:
                return User::ROLE_PROJECT_OWNER;
            case 1: 
                return User::ROLE_OWNER;
            case 2: 
                return User::ROLE_HOLDER;
            case 3: 
                return User::ROLE_VIEWER;
        }
    }
}