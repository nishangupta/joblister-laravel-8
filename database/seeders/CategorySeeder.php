<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'IT & Telecommunication',
            'Marketing / Advertising',
            'General Mgmt', 'Banking / Insurance /Financial Services',
            'Construction / Engineering / Architects ',
            'Creative / Graphics / Designing',
            'Social work', 'hospitality', 'journalism-editor-media', 'Agriculture + Livestock',
            'Teaching profession', 'Engineer', 'Sales', 'Leadership', 'Web development',
            'Mobile App', 'Sales', 'E-Commerce', 'Others'
        ];
        foreach ($categories as $category) {
            DB::table('company_categories')->insert([
                'category_name' => $category
            ]);
        }
    }
}
