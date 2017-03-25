<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class Custom_OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('custom_order')->insert([
        	['idCustomer'=>'1','datebuy'=>now(),'price'=>'3'],
        	['idCustomer'=>'1','datebuy'=>now(),'price'=>'4'],
        	['idCustomer'=>'2','datebuy'=>now(),'price'=>'5'],
        	['idCustomer'=>'3','datebuy'=>now(),'price'=>'6'],
        	['idCustomer'=>'2','datebuy'=>now(),'price'=>'7'],
        ]);
    }
}
