<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AuthModel;
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
        $request->validate([
            'email'     => 'required|string|email',
            'password'  => 'required|string|min:6',
        ]);
        
        $user = AuthModel::where('email', $request->email)->first();
        if($user ){
            if($user->email == $request->email)
            {
                $password = Hash::make($request->password);
                if($user->password === $password )
                {
                    return redirect('dashboard');
                }
                else
                {
                    return redirect()->back()->with('error', 'Password Not Matched. '.$user->password.'');
                }
            }
            else
            {
                return redirect()->back()->with('error', 'Email not matched');
            }
        }
        // $token = $request->session()->token();
        // $input = $request->input('_token');
    
        // if ($token !== $input) {
        //     return redirect()->back()->with('error', 'Something went wrong');
        // }
       
    }

    public function resetPassword()
    {
        return view('Admin.reset-password');
    }

    public function dashboard()
    {
        return view('Admin.dashboard.dashboard');
    }

    public function updatePass()
    {
       $pass = AuthModel::find(1);
       $pass->password = Hash::make('654321');
       $pass->save();
    }


}
