<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'is_active'         => 'boolean',
        ];
    }

    /*-----------------------------------------------------------
     | Relationships
     *----------------------------------------------------------*/

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /*-----------------------------------------------------------
     | Permission Helpers
     *----------------------------------------------------------*/

    /** Returns true if this user is a Super Admin */
    public function isSuperAdmin(): bool
    {
        return $this->role && $this->role->is_super_admin;
    }

    /** Returns true if user can access a given CMS module */
    public function hasModulePermission(string $moduleSlug): bool
    {
        if (!$this->role) {
            return false;
        }
        // load permissions once and cache on the relation
        return $this->role->hasPermission($moduleSlug);
    }
}
