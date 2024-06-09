<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel', compact('artikels'));
    }

    public function show(Artikel $artikel)
    {
        $related_artikels = Artikel::where('slug', '=', $artikel->slug)->get();
        return view('detailartikel', compact('artikel', 'related_artikels'));
    }
}

