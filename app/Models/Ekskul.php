<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $table = 'ekskuls';

    protected $fillable = [
        'title',
        'desc',
        'image',
    ];
}
