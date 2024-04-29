<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo "Halaman Utama";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='logout'>Logout</a>";
    }
    function admin()
    {
        echo "Halaman Admin";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function koperasi()
    {
        echo "Halaman koperasi";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function user()
    {
        echo "Halaman User";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
}
