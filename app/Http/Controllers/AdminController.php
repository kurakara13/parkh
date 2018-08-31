<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Member;
use App\Cars;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.index');
    }

    public function cars_list()
    {
      $car = Cars::get();
        return view('admin.cars',['car' => $car]);
    }

    public function cars_add()
    {
      $member = Member::select('id','member_name')->get();
      // dd($member);
        return view('admin.add_cars',['member' => $member]);
    }

    public function cars_add_post(Request $request)
    {
        // dd($request->file('stnk_image'));
        $filename = time().'.'.$request->file('stnk_image')->getClientOriginalExtension();
        $request->stnk_image->move(public_path('stnk_images'), $filename);

        $cars = new Cars;
        $cars->cars_brand = $request->cars_model;
        $cars->cars_type = $request->cars_type;
        $cars->cars_number = $request->plat_number;
        $cars->id_member = $request->member;
        $cars->status = 'Non Active';
        $cars->owner_cars_name = $request->cars_owner_name;
        $cars->information = $request->info;
        $cars->stnk_images = $filename;

        $cars->save();

        return redirect('admin/cars')->with('message', 'Tambah Data Berhasil');
    }

    public function order_list()
    {
        return view('admin.orders');
    }

    public function place_list()
    {
        return view('admin.place');
    }

    public function place_add()
    {

        return view('admin.add_place');
    }

    public function place_add_post(Request $request)
    {
        dd($request);
        return redirect('admin/places/add');
    }
}
