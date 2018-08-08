<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
		
		return view('index');
	}
	
	public function about(){
		
		return view('');
	}
}
