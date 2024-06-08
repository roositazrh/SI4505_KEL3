<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin()
    {
        echo "Halaman Admin";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout</a>";
        return redirect('/');
    }
    function koperasi()
    {
        echo "Halaman koperasi";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout</a>";
        return redirect('/');
    }
    function user()
    {
        return view('home');
    }
}
