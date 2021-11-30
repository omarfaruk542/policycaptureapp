<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'          =>'OMAR FARUK',
            'email'         =>'faruk@cslsoft.com',
            'password'      =>Hash::make('sa'),
            'for_client'    => 1,
            'com_id'        => 1
        ]);
        App\User::create([
            'name'          =>'Administrator',
            'email'         =>'admin@admin.com',
            'password'      =>Hash::make('sa'),
            'for_client'    => 0
        ]);
    }
}
