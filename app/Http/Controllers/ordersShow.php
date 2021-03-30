<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\studio_profile;
use App\User;

class ordersShow extends Controller
{
    public function index()
    {
        $user = orders::all();
        $stu = User::all();


        return view('studio.studioorderShow',compact('user','stu'));
    }
    public function customerorderindex()
    {
        $stu =User::all();
        $or=orders::all();


        return view('customerOrderShow',compact('stu','or'));
    }
    
}
