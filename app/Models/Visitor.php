<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'visitor_id',
        'ip_address',
        'user_agent',
        'page',
        'visited_at',
    ];
}
