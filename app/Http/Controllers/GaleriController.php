<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        $count_galeris = DB::table('galeris')->count();
        $count_artikels = DB::table('artikels')->count();
        $count_pengaduans = DB::table('pengaduan')->count();
        return view('home', compact('galeris', 'count_galeris', 'count_artikels', 'count_pengaduans'));
    }

    public function show(Galeri $galeri)
    {
        // Mendapatkan galeri terkait berdasarkan slug
        $related_galeris = Galeri::where('slug', '=', $galeri->slug)->get();

        // Mengirimkan data galeri dan galeri terkait ke view 'detailgaleri'
        return view('detailgaleri', compact('galeri', 'related_galeris'));
    }
}
