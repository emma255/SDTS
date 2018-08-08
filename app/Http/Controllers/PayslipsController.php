<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;

use SDTS\Payslips;

class PayslipsController extends Controller
{
    public function index(){
        return view('payslip');
    }


    public function store()
    {
       $path= request()->file('picture')->store('avatars');

       $keys=['purpose', 'description', 'picture'];

       $input = $this->createQueryInput($keys, request());

       $input['picture'] = $path;

       Payslips::create($input);


        return back();
}

}