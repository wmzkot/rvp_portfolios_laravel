<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Maintext;
class MaintextController extends Controller
{
    public function getIndex($url= null){
    	
    	//dd($url);
    	if($url == null){
    		$obj = Maintext::where("url", "index")->first();
    	} else {
    		$obj = Maintext::where("url", $url)->first();
    	}    	
    	return view("welcome", compact("obj"));
    }
}
