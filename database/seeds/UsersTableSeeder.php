<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'role_id' => 2,
            'active' => 1,
        	'name' => 'wanmuzzz',
        	'username' => 'wanmuzzz',
			'email' => 'wanmuzzzz86@gmail.com',
			'password' => bcrypt('abcd1234'),
			'remember_token' => str_random(10),
            ]);
    }
}
