<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomOrder;
use Carbon;
use DB;
class chartController extends Controller
{
    public function chart(){
    	return view('admin.layouts.chart');
    }
    public function calculator(){
    	$day= date_format(Carbon\Carbon::now(),'d/m/Y');
    	$thongke = CustomOrder::orderBy('created_at','desc')->get();
    	return view('admin.chart.calculator',['thongke'=>$thongke,'day'=>$day]);
    	//echo $day;
    }
}
