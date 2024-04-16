<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User; // If you need to associate tasks with users
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TaskFactory extends Factory
{
    // Specify the model associated with the factory
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['pending', 'in progress', 'completed']),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}

