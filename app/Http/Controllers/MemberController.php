<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
   {
     $this->middleware('auth:member');
   }

   public function home()
   {
       return view('member.index');
   }

    public function dashboard()
    {
        return view('member.index');
    }

    public function cars()
    {
        return view('member.cars');
    }

    public function cars_add()
    {
        return view('member.add_cars');
    }

    public function orders()
    {
        return view('member.orders');
    }

    public function places()
    {
        return view('member.places');
    }

    public function places_add()
    {
        return view('member.places_add');
    }

    public function places_add_action(Request $request)
    {
        dd($request);
        return redirect('admin/places/add');
    }
}
