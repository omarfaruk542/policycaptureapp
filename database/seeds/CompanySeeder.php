<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Model\CompanyInfo::create([
            'name'=>'CSL Software Resources Ltd.',
            'address'=>'House # 53, Road # 07, Sector # 04, Uttara Model Town, Dhaka-1230'
        ]);
    }
}
