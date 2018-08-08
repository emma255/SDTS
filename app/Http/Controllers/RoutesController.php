<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;

use SDTS\Routes;
use Illuminate\Support\Facades\Auth;


class RoutesController extends Controller
{
    public function index(){
        return view('routes');
    }
    
    protected function saveRoute(){
        
        $this->validate(request(), [
           't_from'=>'required',
            't_to'=>'required',
            'cost'=>'required'
        ]);
        
        Routes::create([
            't_from'=>request('t_from'), 
            't_to'=>request('t_to'),
            'cost'=>request('cost'),
            'date'=>request('date'),
            'user_id'=>Auth::user()->id,
            ]);
        
        return redirect('index');
    }

    public function routesMade(){

      $routes=Routes::where('user_id',Auth::user()->id)->get();
        
        return view('routes_made', compact('routes'));
    }
    
}
