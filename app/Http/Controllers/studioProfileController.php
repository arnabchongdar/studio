<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studio_profile;

class studioProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studio.studioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'studio_image'=>'image|nullable|max:1999',
            'phone'=>'required',
            'location'=>'required',
            'email'=>'required'
        ]);

        //Handle file uploads

        if($request->hasFile('studio_image')){
            $filenameWithExt=$request->file('studio_image')->getClientOriginalName();

            $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);

            $extension=$request->file('studio_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;

            $path=$request->file('studio_image')->storeAs('public/studio_images',$fileNameToStore);
        }else{
            $fileNameToStore="noimage.jpg";
        }
            $profile = new studio_profile;
            $profile->name=$request->input('name');
            $profile->address=$request->input('address');
            $profile->studio_image=$fileNameToStore;
            $profile->phone=$request->input('phone');
            $profile->location=$request->input('location');
            $profile->email=$request->input('email');

            $profile->save();

            return redirect('studio')->with('success','profile created');







    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts= studio_profile::find($id);
    
     return view('studio.profileedit', compact('posts')); 
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
        $request->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'studio_image'=>'image|nullable|max:1999',
            'phone'=>'required',
            'location'=>'required'
        ]);
  
        //Handle file uploads

        if($request->hasFile('studio_image')){
            $filenameWithExt=$request->file('studio_image')->getClientOriginalName();

            $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);

            $extension=$request->file('studio_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;

            $path=$request->file('studio_image')->storeAs('public/studio_images',$fileNameToStore);
        }else{
            $fileNameToStore="noimage.jpg";
        }
            $profile =studio_profile::find($id);
            $profile->name=$request->input('name');
            $profile->address=$request->input('address');
            $profile->studio_image=$fileNameToStore;
            $profile->phone=$request->input('phone');
            $profile->location=$request->input('location');
            $profile->save();
            
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
