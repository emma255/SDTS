<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;

use SDTS\Shopping;

use SDTS\Routes;

class SearchController extends Controller
{

    
    public function yearly()
    {
        $shoppings= Shopping::all();
        $routes=Routes::all();
        
        return view('search_result', compact('shoppings'), compact('routes'));
    }
}
