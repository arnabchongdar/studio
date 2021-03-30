<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\packages;

class packageController extends Controller
{
     /**
     * 
     * 
     * 
     *   /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','show']]);
    }
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function package()
    {
         // get all the sharks
         $posts = packages::all();

         // load the view and pass the sharks
         return view('package.package',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
//trial example

       /* $request->validate([  
            'title'=>'required',
            'body'=>'required'  
        ]);  
  
        $crud = new Crud;  
        $crud->first_name =  $request->get('first_name');  
        $crud->last_name = $request->get('last_name');  
        $crud->qualifications = $request->get('qualifications');  
        $crud->gender = $request->get('gender');  
        $crud->save();  
        }  */
//above is a trial example
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999',
            'price'=>'required'
        ]);

        //Handle file uploads

        if($request->hasFile('cover_image')){
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();

            $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);

            $extension=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;

            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore="noimage.jpg";
        }
            $posts = new packages;
            $posts->title=$request->input('title');
            $posts->body=$request->input('body');
            $posts->user_id=auth()->user()->id;
            $posts->cover_image=$fileNameToStore;
            $posts->price=$request->input('price');
            $posts->save();

            return redirect('admin/package')->with('success','post created');
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
    $posts= packages::find($id);
    if(auth()->user()->user_type!=1){
        return redirect('/home')->with('error','Unauthorised Page');
    }  
     return view('package.edit', compact('posts')); 
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
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999',
            'price'=>'required'
        ]);
  
        //Handle file uploads

        if($request->hasFile('cover_image')){
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();

            $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);

            $extension=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;

            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore="noimage.jpg";
        }
            $posts =packages::find($id);
            $posts->title=$request->input('title');
            $posts->body=$request->input('body');
            $posts->user_id=auth()->user()->id;
            $posts->cover_image=$fileNameToStore;
            $posts->price=$request->input('price');
            $posts->save();





    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=packages::find($id); 
        if(auth()->user()->user_type!=1){
            return redirect('/posts')->with('error','Unauthorised Page');
        }  
        $posts->delete();  
        return redirect('admin/package')->with('success','post deleted');
    }
}
