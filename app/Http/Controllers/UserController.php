<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index(){

        // $data = [
        //             'name'  => 'Rupinder',
        //             'email' => 'rupinder@gmail.com',
        //             'password' => bcrypt("rupi"),
        // ];

        // User::create($data);

        // $user = new User();
        // $user->name = 'pawan';
        // $user->email = 'pawan@gmail.com';
        // $user->password = bcrypt('pawan password');
        // $user->save();

         // User::where('name','pawan')->delete();

        // User::where('name','pawan')->update(['name' => 'pawan chaoudhary']);

        // $user = User::where('name','pawan chaoudhary')->get();
        // return $user;

        $user = User::all();
        return $user;



        // dd($user);

       //  DB::delete('delete from users where name = ?', ['aditya']);


       //  DB::insert('insert into users (name, email, password)
       //      values (?,?,?)', [
       //          'lokesh', 'adityaskwt324@gmail.com','lokeshpassword'
       //      ]);

       

       // DB::update('update users set email = ? where name = ?', ['lokesh@gmail.com', 'lokesh']);

        // $results = DB::select('select * from users');

        // return $results;

        return view('html_test_page');
    }
}
