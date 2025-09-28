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

    // Example relationship: one ekskul has many members
    // public function members()
    // {
    //     return $this->hasMany(Member::class, 'ekskul_id');
    // }
}
