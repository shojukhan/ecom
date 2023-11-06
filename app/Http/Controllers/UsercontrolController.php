<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsercontrolController extends Controller
{
    public function userdashbord_view(){
        return view('backend.user.user-dashbord');
    }
}
