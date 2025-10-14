<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'title',
        'deskripsi',
        'content',
        'gambar',
        'views',
        'type',
        'created_at'
    ];
}
