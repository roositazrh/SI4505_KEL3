<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    protected $fillable = [
        'nama_desa',
        'slug',
        'alamat',
        'provinsi',
        'sumber_daya',
        'img_source',
        'lintang',
        'bujur',
        'tanggal_publish',
        'deskripsi_desa',
    ];

    protected static ?string $navigationLabel = 'Galeri';
}

