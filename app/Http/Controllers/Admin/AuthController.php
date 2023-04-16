<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // admin auth controller

    public function adminLogin(Request $request)
    {
        // login 
        
        $validate = Validator::make($request->all(), [
            'email'     => 'required|string|email',
            'password'  => 'required|string|min:6',
        ]);

        if($validate->fails())
        {
            return $validate->errors();
        }

    }
    public function resetPassword()
    {
        return view('Admin.reset-password');
    }

    public function dashboard()
    {
        return view('Admin.dashboard.dashboard');
    }
}
