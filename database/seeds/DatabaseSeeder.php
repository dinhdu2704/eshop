<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        // 	'name'=>'dinhdu',
        // 	'email'=>'dinhdu2704@gmail.com',
        // 	//mã hóa dữ liệu
        // 	'password'=>bcrypt('kaideptrai')
        // ]);
        $this->call(UserSeeder::class);
    }
}

class UserSeeder extends Seeder{
	public function run(){
		DB::table('users')->insert([
        	['name'=>'dinhdu','email'=>str_random(7).'@gmail.com','password'=>bcrypt('kaideptrai')],
        	['name'=>'dinhdu1','email'=>str_random(5).'@gmail.com','password'=>bcrypt('kaideptrai')],
        	['name'=>'dinhdu2','email'=>str_random(10).'@gmail.com','password'=>bcrypt('kaideptrai')]
        ]);
	}
}
