<?php

namespace App\Http\Controllers;

/**
 * 
 */
class HomeController extends Controller{
	
	function showAdmin(){
		return view('admin.admin');
	}
	
}