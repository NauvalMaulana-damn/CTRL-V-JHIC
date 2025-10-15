<?php

namespace App\Models;

use App\Traits\Loggable;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use Loggable;
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
