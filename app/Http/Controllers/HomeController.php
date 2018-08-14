<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('home');
    }

    public function chart(){

        $test1 = Shopping::where(['user_id',Auth::user()->id],['quantity','>',5],['price','>=','1000'])->first();

            if($test1 != null){


                $name = Auth::user()->name;

                $shopping = DB::table('shoppings')
                ->select(DB::raw("sum(quantity) as quantity, product_name"))
                ->where(['user_id',Auth::user()->id],['quantity','>',5],['price','>=','1000'])
                ->orderBy("tarehe")->groupBy(DB::raw("(tarehe)"))->get();

                $months = 0;
                $result[] = ['Product','Quantity'];

                foreach ($shopping as $key => $value) {

                $result[++$key] = [$value->product_name, $value->quantity];
            }
            return view('charts',['shopping'=>json_encode($result), 'name'=>$name  ]);
            }
    }

    public function login(){
        return view('auth.passwords.email2');
    }
}
