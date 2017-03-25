<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
        	['idUser'=>'13','company'=>str_random(12),'address'=>str_random(12),'phone'=>'0987654321'],
        	['idUser'=>'1','company'=>str_random(5),'address'=>str_random(12),'phone'=>'0987654321'],
        	['idUser'=>'17','company'=>str_random(10),'address'=>str_random(12),'phone'=>'0987654321'],
        	['idUser'=>'5','company'=>str_random(10),'address'=>str_random(12),'phone'=>'0987654321'],
        	['idUser'=>'4','company'=>str_random(10),'address'=>str_random(12),'phone'=>'0987654321'],
        ]);
    }
}
