<?php

namespace SDTS\Http\Controllers;

use SDTS\Shopping;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index(){
        return view('shopping');
    }

    protected function saveShopping(){
        
        $this->validate(request(), [
           'product_name'=>'required',
           'quantity'=>'required|min:1', 
           'price'=>'required' 
        ]);
        
        Shopping::create([
            'product_name'=>request('product_name'),
             'quantity'=>request('quantity'),
             'price'=>request('price'),
             'date'=>request('date'),
             'user_id'=>Auth::user()->id,
        ]);
     
     return redirect('index');

    }

    public function shoppingMade(){

      $shoppings= Shopping::where('user_id',Auth::user()->id)->get();
      
      return view('shopping_made', compact('shoppings'));


    }
    
}
