<?php

namespace App\Http\Controllers;

/**
 * 
 */
class HomeUsersController extends Controller{
	
	function showIndex(){
		return view('index');
	}
	function showPost(){
		return view('post');
	}
	function showAbout(){
		return view('about');
	}
	function showContacts(){
		return view('contacts');
	}
	
}