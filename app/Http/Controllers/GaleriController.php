<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('home', compact('galeris'));
    }

    public function show(Galeri $galeri)
    {
        // Mendapatkan galeri terkait berdasarkan slug
        $related_galeris = Galeri::where('slug', '=', $galeri->slug)->get();

        // Mengirimkan data galeri dan galeri terkait ke view 'detailgaleri'
        return view('detailgaleri', compact('galeri', 'related_galeris'));
    }
}
