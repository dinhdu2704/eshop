<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class AjaxController extends Controller
{
    public function getImages($Images){
    	$img= $Images;
    	echo "<img src='".$img."'>";
    }
     // cart update
    function update(Request $request,$id,$qty){
        if($request->ajax()){
	        $id= $request->id;
	        $qty=$request->qty;
	        Cart::update($id,$qty);
        	echo "oke";
        }
    }
}
