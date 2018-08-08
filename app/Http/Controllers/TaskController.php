<?php

namespace SDTS\Http\Controllers;



use SDTS\Task;

class TaskController extends Controller
{
    
	
	
	public function index($id){
		$tasks=Task::all();
	
    return view('welcome', compact('tasks'));
		
	}
	
	public function about(){
		
		$tasks=Task::get();
	
        return view('about.emmanuel',compact('tasks'));
	}
	
}
