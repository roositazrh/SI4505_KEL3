<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    protected $fillable = [
        'title',
        'slug',
        'author',
        'img_source',
        'tanggal_publish',
        'body',
    ];
}
