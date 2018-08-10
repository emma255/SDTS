<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;
use SDTS\Payslips;
use Illuminate\Support\Facades\Auth;
use App\User;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payslip');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $path = request()->file('slip')->store('payslips');  
 
        Payslips::create([
            'purpose'=>request('purpose'),
            'description'=>request('description'),
            'picture'=>$path,
            'user_id'=>Auth::user()->id,
        ]);
        session()->flash('flash_message', 'Successfully added the payslip!!');

 
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $details = Payslips::where('user_id',Auth::user()->id)->get();

        return view('payslip-show')->with('details',$details);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit-payment')->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if (Payslips::find($id) == null){
            session()->flash('flash_message', 'Failed, no such payment exist!!');
        }
        else{

            $this->validate(request(), [
                'purpose' => 'required',
                'description' => 'required',
                'slip' => 'required',
            ]);
            $path = request()->file('slip')->store('payslips');

            Payslips::where('id', $id)->update([
                'purpose' =>request('purpose'),
                'description' => request('description'),
                'picture' => $path,
            ]);

            session()->flash('flash_message', 'Successfully edited your profile!!');

        }

        return redirect('payslip/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(Payslips::find($id) == null){
           session()->flash('flash_message', 'The payment is not deleted successfulll because it does not exist!!');
       }
       else{
        Payslips::where('id', $id)->delete();
        session()->flash('flash_message', 'Successfully deleted the payment');

       }
       return redirect()->back();
    }
}
