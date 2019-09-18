<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
   public function index()
   {
       $data['title']='Personal-Blog';
       Session::forget('users');
       return view('admin.dashboard',$data);
   }
}
