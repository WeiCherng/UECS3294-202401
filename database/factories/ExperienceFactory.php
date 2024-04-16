<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
  protected $model = Experience::class;

  public function definition()
  {
    return [
      'user_id' => User::factory(),
      'CompanyName' => $this->faker->company,
      'RoleDesignation' => $this->faker->jobTitle,
      'Salary' => $this->faker->randomFloat(2, 20000, 100000),
      'WorkDuration' => $this->faker->randomElement(['1 year', '2 years', '3 years', '4 years', '5 years']),
    ];
  }
}
