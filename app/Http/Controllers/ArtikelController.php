<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::get();

        return view('artikel', compact('artikels'));
    }

    public function show(Artikel $artikel)
    {
        $artikels = Artikel::get();
        $related_artikels = Artikel::get();

        return view('detailartikel', compact('artikel', 'related_artikels'));
    }
}
