<?php

namespace SDTS\Http\Controllers;

use Illuminate\Http\Request;
use SDTS\Profile;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $test = Profile::where('user_id',Auth::user()->id)->first();

        $path = $request->file('photo')->store('avatars');

            if($test != null){

                 Profile::where('user_id',Auth::user()->id)->update([
                    'user_id'=>Auth::user()->id,
                    'photo'=>$path,
                    'profession'=>request('profession'),
                    'currentEduLevel'=>request('education_level'),
                    'institution'=>request('institution'),
                    'description'=>request('description'),
                ]);
            }

            else {
               
                Profile::create([
                    'user_id'=>Auth::user()->id,
                    'photo'=>$path,
                    'profession'=>request('profession'),
                    'currentEduLevel'=>request('education_level'),
                    'institution'=>request('institution'),
                    'description'=>request('description'),
                ]);
            }
       

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $images = Profile::where('user_id',Auth::user()->id)->pluck('photo')->first();

        $image;

        if ($images != null) {

            $image = $images;

        } else {
            $image = null;
        }
        

        $details = Profile::where('user_id',Auth::user()->id)->select('profession','currentEduLevel','institution','description','photo')->get();
        
        
        return view('profile-show',['details'=>$details, 'image'=>$image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
