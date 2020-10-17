<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_title' => 'Marketing manager',
            'job_level' => 'Senior level',
            'vacancy_count' => rand(2, 10), // password
            'employment_type' => 'Full time',
            'job_location' => 'kathmandu-18,Nepal',
            'deadline' => date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s") . " +2 days")),
            'education_level' => 'Bachelors',
            'experience' => '2 years',
            'salary' => '20k - 50k',
            'skills' => 'Team player, Active listener',
            'specifications' => '<p></p>',
        ];
    }
}
