<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends Controller
{
    public function signup(Request $request)
    {
        $data = new Users();

//        $name = $request->file('file');

        // ?---------------Validation----------------
        $request->validate(
            [
                'name'=>'required|max:70',
                'username'=>'required|max:20',
                'email'=>'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
                'password'=>'required|min:5'
            ]
        );

        // *--------------Checking if user email already exist------------
        $dataemail = users::where("email","=",$request->email)->first();

        // *--------------Checking if user username already exist------------
        $datauser = users::where("username",'=',$request->username)->first();

        if($dataemail === null){
            if($datauser === null){

                //*--------------Adding User Data to Database---------------
                $data->name = $request->input('name');
                $data->username = $request->input('username');
                $data->email = $request->input('email');
                $data->password = $request->input('password');
                $data->save();

                // ?--------------Creating User Session ---------------------
                $request->session()->put("loguser",$data->username);
                return redirect('/');
            }else{
                // !---------------Error msg if username already exist ----------------------
                return back()->with('failuser','Sorry! This username already exist');
                // return redirect('signup');
            }
        }else{
            // !------------------Error msg if email already exist---------------------------
            return back()->with('failemail','Sorry! This email already exist');
            // return redirect('signup');
        }

    }

    public function login(Request $request)
    {
        // ?----------------Validation-------------------
        $request->validate(
            [
                'email'=>'required|max:20',
                'pwd'=>'required|min:5'
            ],
            [
                'email.required'=>'The username field is required.',
                'pwd.required'=>'The password field is required.',
                'pwd.min'=>'The password must be at least 5 characters.'
            ]
        );

        // ?----------------Searching For User-------------------
        $userdata = Users::where("email","=",$request->email)->where("password","=",$request->pwd)->first();
        $userlog = Users::select("username")->where("email","=",$request->email)->where("password",$request->pwd)->first();
        // ?----------------Logging In User---------------------
        if(!$userdata){
            return back()->with("faillog","Sorry! This account was not found");
        }else{
            $request->session()->put("loguser",$userlog->username);
            return redirect('/');
        }

    }

    public function logout()
    {
        //*-------------Logging Out User--------------
        if(session()->has('loguser') || session()->has('logadmin')){
            session()->pull('loguser');
            session()->pull('logadmin');
        }
        return redirect('/');
    }
}
