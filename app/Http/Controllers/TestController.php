<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function welcome()
    {
    	return view('welcome');
    	//$a = 15;
    	//$b = 10;
    	//$c= $a + $b;
    	//return "el valor es $c";

    }
}
