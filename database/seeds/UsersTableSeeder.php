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
        User::create([
        	'name'=>'Pablo Cayoja',
        	'email'=>'pablocayoja@hotmail.com',
        	'password'=>bcrypt('1234567')
        ]);
    }
}
