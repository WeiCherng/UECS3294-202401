<?php

namespace Database\Factories;

use App\Models\Education;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    protected $model = Education::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), 
            'CourseProgram' => $this->faker->word,
            'University' => $this->faker->company, 
            'YearGraduate' => $this->faker->year('now -5 years'), 
            'Cgpa' => $this->faker->randomFloat(2, 1.0, 4.0), 
            'Achievements' => $this->faker->randomElement(['Dean List', 'President List']),
        ];
    }
}
