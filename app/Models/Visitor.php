<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'visitor_id',
        'ip_address',
        'user_agent',
        'page',
        'visited_at',
        'is_active',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    // 🔴 METHOD BARU: Tandai pengunjung tidak aktif
    public static function markInactiveVisitors()
    {
        // Tandai pengunjung yang tidak aktif (last activity > 15 menit)
        return self::where('visited_at', '<', now()->subMinutes(15))
                  ->where('is_active', true)
                  ->update(['is_active' => false]);
    }

    // 🔴 METHOD BARU: Bersihkan data lama
    public static function cleanupOldVisitors()
    {
        // Hapus data yang sudah lebih dari 7 hari
        return self::where('visited_at', '<', now()->subDays(7))->delete();
    }
}
