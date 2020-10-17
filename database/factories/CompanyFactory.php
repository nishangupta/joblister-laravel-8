<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 2, //default author by user seeder class
            'company_category_id' => 1,
            'logo' => 'images/companies/logos/',
            'title' => 'Web App developer',
            'description' => 'This company Pvt Ltd is the company specialized to help organizations with financial technology solutions. We provide solutions such comprehensive mobile and online payment solutions and gateway facilitating services. We facilitate in online transaction settlement service to merchants and their banks to be able to accept/acquire payments from third party payment sources. We provide technology and solutions for acquiring payment from 3rd party wallets, smart wallets solutions, merchant management solutions and host of other solutions..',
            'website' => 'https://www.companywebsite.com',
            'cover_img' => 'nocover',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
    }
}
