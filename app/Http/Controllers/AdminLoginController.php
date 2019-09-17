<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function adminLoginForm()
    {
        $data['title']='Please Login';
        return view('admin.adminLogin',$data);
    }
    public function adminLogin(Request $request)
    {
         $request->validate([
             'email'=>'required|email',
             'password'=>'required',
         ]);
         $credentials=$request->only('email','password');
         if(Auth::attempt($credentials))
         {
             return redirect()->intended('dashboard');
         }
         Session::flash('message','invalid email or password');
         return redirect()->back();

    }
}
