<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class ApiAccessController extends Controller
{
    public function places_list(){
      return array('jihad');
    }

    public function cars_list(){
      return array('status' => 'success', 'data' => Cars::all());
    }
}
