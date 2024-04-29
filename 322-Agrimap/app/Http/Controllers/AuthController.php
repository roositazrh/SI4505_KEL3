<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email must be at least',
                'password.required' => 'Password must be at least',
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin/admin');
            }elseif (Auth::user()->role == 'koperasi') {
                return redirect('admin/koperasi');
            }elseif (Auth::user()->role == 'user'){
                return redirect('admin/user');
            }
        }else{
            return redirect('')->withErrors('Username or Password Incorrect')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
