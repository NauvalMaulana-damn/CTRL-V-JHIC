<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'password',
        'role',
        'role_key',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
        'is_active' => 'boolean',
    ];

    // Scope untuk role
    public function scopeSuperadmin($query)
    {
        return $query->where('role', 'SUPERADMIN');
    }

    public function scopeEditor($query)
    {
        return $query->where('role', 'EDITOR');
    }

    public function scopeViewer($query)
    {
        return $query->where('role', 'VIEWER');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Check role
    public function isSuperadmin()
    {
        return $this->role === 'SUPERADMIN';
    }

    public function isEditor()
    {
        return $this->role === 'EDITOR';
    }

    public function isViewer()
    {
        return $this->role === 'VIEWER';
    }

    // Relationships
    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
}
