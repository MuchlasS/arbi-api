<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            array(
                'name'=>'muchlas',
                'email'=>'muchlas148@gmail.com',
                'password'=>Hash::make('superadmin'),
                'address'=>'jl. raya pramuka',
                'gender'=>'l',
                'hp'=>'089685618837',
                'role_id'=>1,
                'group_id'=>1
            )
        ));
    }
}
