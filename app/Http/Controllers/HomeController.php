<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;

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

        $test = Infant::where('namba_ya_usajili',request('namba'))->first();

            if($test == null){
                $error_txt = 'Hamna taarifa zilizohifadhiwa za '.request('namba');

                return view('error-view')->with('error_txt',$error_txt);
            }
            else{

                $name = RegisterChild::where('namba_ya_mtoto',request('namba'))->pluck('jina_la_mtoto');

                $Weight = DB::table('infants')->select(DB::raw("sum(uzito) as uzito"))->where('namba_ya_usajili',request('namba'))
                ->orderBy("tarehe")->groupBy(DB::raw("(tarehe)"))->get();

                $months = 0;
                $result[] = ['Hudhurio','Uzito'];

                foreach ($Weight as $key => $value) {

                $result[++$key] = [$months++, (int)$value->uzito/1000];
            }
            return view('progressRecords.chart',['Weight'=>json_encode($result), 'name'=>$name  ]);
            }
    }

    public function login(){
        return view('auth.passwords.email2');
    }
}
