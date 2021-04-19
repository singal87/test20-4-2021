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
	            'name' => str_random(8),
	            'email' => 'admin@gmail.com',
	            'password' => bcrypt('123456')
	        ]);
    }
}
