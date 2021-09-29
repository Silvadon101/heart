<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;

class AdminController extends Controller
{
    public function show()
    {
        if(session()->has('logadmin'))
        {
            return view('admindash');
        }else{
            return redirect('admin-log');
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
        $userdata = Admins::where("email","=",$request->email)->orWhere("username",$request->email)->where("password","=",$request->pwd)->first();

        // ?-----------------Retrieving User Info----------------
        $userlog = Admins::select("username")->where("email","=",$request->email)->orWhere("username",$request->email)->where("password",$request->pwd)->first();

        // ?----------------Logging In User---------------------
        if(!$userdata){
            return back()->with("faillog","Sorry! This account was not found");
        }else{
            $request->session()->put("logadmin",$userlog->username);
            return redirect('admindash');
        }

    }

    public function add(Request $request)
    {
        $data = new Admins();

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
        $dataemail = Admins::where("email","=",$request->email)->first();

        // *--------------Checking if user username already exist------------
        $datauser = Admins::where("username",'=',$request->username)->first();

        if($dataemail === null){
            if($datauser === null){

                // *--------------Adding User Data to Database---------------
                $data->name = $request->input('name');
                $data->username = $request->input('username');
                $data->email = $request->input('email');
                $data->password = $request->input('password');
                $data->save();

                return redirect()->back()->with('success','Admin Added');
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
}
