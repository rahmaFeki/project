<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error401()
	{ 
		
return view("401")->render();

	
	}
		public function error404()
	{ 
		
return view("404")->render();

	
	}
}
