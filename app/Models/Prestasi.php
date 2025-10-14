<?php
// app/Models/Prestasi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasis';

    protected $fillable = [
        'nama',
        'subjudul',
        'gambar',
    ];
}
