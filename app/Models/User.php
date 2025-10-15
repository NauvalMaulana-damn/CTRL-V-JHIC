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

    public static function SUPERADMIN_ROLE_KEY()
{
    return env('SUPERADMIN_ROLE_KEY');
}

public static function EDITOR_ROLE_KEY()
{
    return env('EDITOR_ROLE_KEY');
}

public static function VIEWER_ROLE_KEY()
{
    return env('VIEWER_ROLE_KEY');
}

// Role keys dari env
public static function ROLE_KEYS()
{
    return [
        'SUPERADMIN' => self::SUPERADMIN_ROLE_KEY(),
        'EDITOR'     => self::EDITOR_ROLE_KEY(),
        'VIEWER'     => self::VIEWER_ROLE_KEY(),
    ];
}

// Boot method untuk set role_key otomatis
protected static function boot()
{
    parent::boot();

    static::creating(function ($user) {
        $user->role_key = self::ROLE_KEYS()[$user->role] ?? null;
    });

    static::updating(function ($user) {
        if ($user->isDirty('role')) {
            $user->role_key = self::ROLE_KEYS()[$user->role] ?? null;
        }
    });
}


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

    // Check permissions
    public function canCreate()
    {
        return in_array($this->role, ['SUPERADMIN', 'EDITOR']);
    }

    public function canEdit()
    {
        return in_array($this->role, ['SUPERADMIN', 'EDITOR']);
    }

    public function canDelete()
    {
        return $this->role === 'SUPERADMIN';
    }

    public function canManageUsers()
    {
        return $this->role === 'SUPERADMIN';
    }

    public function canViewLogs()
    {
        return $this->role === 'SUPERADMIN';
    }

    // Verify role key
    public function verifyRoleKey()
    {
        return $this->role_key === (self::ROLE_KEYS()[$this->role] ?? null);
    }

    // Relationships
    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
}
