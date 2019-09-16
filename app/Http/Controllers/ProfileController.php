<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function profile()
   {
       $data['title']='User Profile';
       return view('admin.user.profile');
   }
}
