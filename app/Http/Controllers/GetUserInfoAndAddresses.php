<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_info;

class GetUserInfoAndAddresses extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function fetch_user_info(){
        // return User_info::find(8)->user_addresses;
        $data = User_info::with('user_addresses')->get();
        // $data = User_info::with('user_addresses')->find(8)->toArray();
        // return $data;
        return view('show_user_info')->with(['data' => $data]);
    }
}
