<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function show(Pengaduan $pengaduan)
    {
        $pengaduan = Pengaduan::get();

        return view('pengaduan', compact('pengaduan'));
    }
}
