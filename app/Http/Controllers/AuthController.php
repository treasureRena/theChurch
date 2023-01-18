<?php

namespace App\Http\Controllers;

use App\Models\StreamUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registerView(){
        return view("register");
    }

    public function loginPage(){

        return view('login');
    }


    public function registerPost(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $save = new User();
        $save->name             = $request->name;
        $save->email             = $request->email;
        $save->save();
        Session::put('user', $request->name);
        return redirect()->route('loginPage');


    }

    public function loginPost(Request $request){
        request()->validate([
            'email' => 'required',
            'country' => 'required',
            'participate' => 'required',
            'loginType' => 'required',
        ]);

        $userT = User::where("email", $request->email)->first();
        if ($userT){
            $user = new StreamUser();
            $user->user_id  = $userT->id;

            Session::put('user', $userT->name);
            if($request->loginType == "group"){
                $user->loginType  = $request->loginType;
                $user->numberInGroup =  $request->numberInGroup ;

            }else{
                $user->loginType  = "individual";
            }
            $user->country  = $request->country;
            $user->participate  = $request->participate;
            $user->save();
            return back();

        }else{
            return back()->with('errs', 'Invalid Credentials, please register before proceeding');
        }



    }

    public function logoutUser(){
        Session::flush();
        return redirect()->route('loginPage');

    }
}
