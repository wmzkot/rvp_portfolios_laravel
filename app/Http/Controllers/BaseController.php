<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function getIndex() {
    	//echo 111;
    	$obj = new \stdClass;
			$obj->name = "Имя";
			$obj->body = "Тело";
    	return view('welcome', compact("obj"));

	}
}
