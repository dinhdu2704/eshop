<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class chartController extends Controller
{
    public function chart(){
    	return view('admin.layouts.chart');
    }
}
