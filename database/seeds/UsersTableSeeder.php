<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([

            'name'       => 'Super Admin',
            'avatar'     => 'defualt.png',
            'password'   => bcrypt('secret'),
            'email'      =>  'admin@app.com',
            'role_id'    => '1'
        ]);
    }
}
