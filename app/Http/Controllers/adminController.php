<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    // userLogin
    function userLogin(Request $request){

        $validateData = $request->validate([
            'username' => 'required',
          'password' => 'required',
        ]);


        $username = $request->input('username');
        $password = $request->input('password');

       $data = DB::table('user')
                   ->where('username',$username)
                   ->where('password',$password)
                   ->get();
        if (isset($data[0]->id)) {

            $request->session()->put('Admin_Login_id',$data[0]->id);
            $request->session()->put('Admin_Login_name',$data[0]->username);

            $request->session()->flash('success_msg','Wellcome '.$data[0]->username);

            return redirect('/dashboard');
        }else{
            $request->session()->flash('msg','Username And Password Incorrect!');
            return redirect('/login');
        }

    }
}
