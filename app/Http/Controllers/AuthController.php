<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
                return redirect('admin');
            }elseif (Auth::user()->role == 'koperasi') {
                return redirect('koperasi');
            }elseif (Auth::user()->role == 'user'){
                return redirect('dashboard');
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

    function register()
    {
        return view('auth.register');
    }

    function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required | unique:users',
                'password' => 'required',
            ],
            [
                'name.required' => 'Name must be at least',
                'email.required' => 'Email must be at least',
                'email.unique' => 'Email sudah digunakan',
                'password.required' => 'Password must be at least',
            ]
        );

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user'
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            }elseif (Auth::user()->role == 'koperasi') {
                return redirect('koperasi');
            }elseif (Auth::user()->role == 'user'){
                return redirect('dashboard');
            }
        }else{
            return redirect('')->withErrors('Username or Password Incorrect')->withInput();
        }
    }
}
