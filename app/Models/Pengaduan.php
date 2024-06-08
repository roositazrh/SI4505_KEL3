<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];
    protected $table = 'pengaduan';
    protected $fillable = [
        'nik',
        'nama',
        'email',
        'no_telp',
        'detail_pengaduan',
    ];
}
