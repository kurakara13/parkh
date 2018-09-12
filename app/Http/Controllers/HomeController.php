<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ApiHelper;
use App\Cars;

class HomeController extends Controller
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
    public function index()
    {
        $apidata = ApiHelper::call_api('http://localhost/startup/parkhere/public/api/place/list');

        return view('index');
    }

    public function parking()
    {
        $api = ApiHelper::call_api('http://localhost/startup/parkhere/public/api/cars/list');
        $apidata = array('attributes' => json_decode($api));
        $test = Cars::get();

        return view('parking');
    }
}
