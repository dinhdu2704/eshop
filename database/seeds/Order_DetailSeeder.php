<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class Order_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->insert([
        	['idOrder'=>'1','idPro'=>'17','quantity'=>'3'],
        	['idOrder'=>'1','idPro'=>'13','quantity'=>'4'],
        	['idOrder'=>'2','idPro'=>'11','quantity'=>'5'],
        	['idOrder'=>'3','idPro'=>'9','quantity'=>'6'],
        	['idOrder'=>'2','idPro'=>'8','quantity'=>'7'],
        ]);
    }
}
