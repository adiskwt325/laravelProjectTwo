<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_info;
use App\User_addresse;

class GetUserInfo extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function return_view(){
        return view('get_user_info');
    }

    function save_user_info(Request $req){
         // print_r($req->input());

        $data = [
        'firstname'  => $req->firstname,
        'lastname' => $req->lastname,
        'age' => $req->age,
            ];

        $user_info = User_info::create($data);
        $user_info_id = $user_info->id;

        $user_address_1 = new User_addresse();
        $user_address_1->address_text = $req->address_1;
        $user_info->user_addresses()->save($user_address_1);

         $user_address_2 = new User_addresse();
        $user_address_2->address_text = $req->address_2;
        $user_info->user_addresses()->save($user_address_2);

         $user_address_3 = new User_addresse();
        $user_address_3->address_text = $req->address_3;
        $user_info->user_addresses()->save($user_address_3);


        $data = User_info::with('user_addresses')->get();
        return view('show_user_info')->with(['data' => $data]);

        $user = User_info::all();
        return $user;
    }

       function delete_user_info(Request $req){
         // print_r($req->input());

        User_info::where('id',$req->user_id)->delete();

        $data = User_info::with('user_addresses')->get();
        return view('show_user_info')->with(['data' => $data]);


    }
}
