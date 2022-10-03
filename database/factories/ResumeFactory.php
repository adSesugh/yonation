<?php

namespace Database\Factories;

use App\Models\Degree;
use App\Models\Domain;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resume>
 */
class ResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $domains = Domain::pluck('id')->all();
        $degrees = Degree::pluck('id')->all();

        return [
            'fullname' =>   fake()->name(),
            'email' =>  fake()->email(),
            'phone' =>  fake()->phoneNumber(),
            'mobile_no' => fake()->phoneNumber(),
            'gender'    =>  fake()->randomElement(['male', 'female']),
            'birthdate' =>  fake()->date('Y-m-d', 'now'),
            'domain_id' =>  fake()->randomElement($domains),
            'school_name'   =>  fake()->company(),
            'year_from' =>  2015,
            'year_to'   =>  fake()->year('now'),
            'course'    =>  fake()->name(),
            'degree_id' =>  fake()->randomElement($degrees),
        ];
    }
}
