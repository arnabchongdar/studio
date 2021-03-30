<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
    }

    public function addtocart(Request $request,$product_id){
        $check =cart::where('package_id',$product_id)->where('customer_mail',auth()->user()->email)->first();
        if($check){
            cart::where('package_id',$product_id)->where('customer_mail',auth()->user()->email)->increment('qty');
            return Redirect()->back()->with('success','Product added on Cart');
        }
        else{
            cart::insert([
                'package_id'=>$product_id,
                'qty'=> 1,
                'price'=>$request->price,
                'cover_image'=>$request->cover_image,
                'customer_mail'=>auth()->user()->email,
            ]);
            return Redirect()->back()->with('success','Product added on Cart');
            }
    }


    public function cartPage(){

        $carts=cart::all();
        return view('pages.cart',compact('carts'));
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
    public function store(Request $request)
    {
        //
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
        cart::where('package_id',$id)->where('customer_mail',auth()->user()->email)->update([

            'qty'=>$request->qty,
      
          ]);
          return Redirect()->back()->with('cart_updated','Product updated in  Cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cart::where('package_id',$id)->where('customer_mail',auth()->user()->email)->delete();
        return Redirect()->back()->with('cart_delete','Product deleted from  Cart');
    }




public function quantityUpdate(Request $request,$product_id){
     $check =cart::where('package_id',$product_id)->where('customer_mail',auth()->user()->email)->first();
        if($check){
            cart::where('package_id',$product_id)->where('customer_mail',auth()->user()->email)->update([
                'qty'=>$request->qty,
                ]);
            return Redirect()->back()->with('success','Product added on Cart');
        }
       
           
}
}

