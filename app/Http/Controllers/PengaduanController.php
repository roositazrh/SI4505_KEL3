<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function pengaduan()
    {
        return view('pengaduan');
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'nik' => 'required',
                'nama' => 'required',
                'email' => 'required',
                'no_telp' => 'required',
                'detail_pengaduan' => 'required',
            ],
            [
                'nik' => 'Must Be At Least',
                'nama' => 'Must Be At Least',
                'email' => 'Must Be At Least',
                'no_telp' => 'Must Be At Least',
                'detail_pengaduan' => 'Must Be At Least',
            ]
        );

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'detail_pengaduan' => $request->detail_pengaduan,
        ];
        Pengaduan::create($data);

        return redirect('/');
    }
}
