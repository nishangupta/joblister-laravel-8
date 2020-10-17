<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Post;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'title' => 'Php laravel developer',
                'level' => 'Senior level',
                'employment' => 'full time',
                'education' => 'bachelors',
            ], [
                'title' => 'Marketing Expert',
                'level' => 'Senior level',
                'employment' => 'full time',
                'education' => 'bachelors',
            ], [
                'title' => 'Professional designer',
                'level' => 'Top level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Dotnet programmer',
                'level' => 'Senior level',
                'employment' => 'full time',
                'education' => 'high school',
            ], [
                'title' => 'Sales Executive',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Maths Teacher',
                'level' => 'Senior level',
                'employment' => 'full time',
                'education' => 'master',
            ],
        ];
        //user id is 2 that has author role
        $company = Company::factory()->create([
            'company_category_id' => 1,
            'title' => 'Gabrato company',
            'logo' => 'images/logo/7.png',
        ]);
        foreach ($details as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $company->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }
    }
}
