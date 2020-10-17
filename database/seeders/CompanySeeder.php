<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

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
                'title'=>'My ob Company',
            ],
            [
                'title'=>'Belimo',
            ],
            [
                'title'=>'Life groups',
            ],
            [
                'title'=>'Lilly',
            ],[
                'title'=>'Cirtus',
            ],[
                'title'=>'Trustly',
            ],[
                'title'=>'Gabrato',
            ],[
                'title'=>'oldndorrif',
            ]
        ];
        //user id is 2 that has author role
        foreach($details as $index=>$detail){
            $company = Company::factory()->create([
                'company_category_id'=>$index,
                'title'=>$detail['title'],
                'logo'=>'images/logo/'.$index.'.png',
            ]);
        }
            
    }
}
