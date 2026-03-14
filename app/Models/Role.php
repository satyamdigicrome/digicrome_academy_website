<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'is_super_admin'];

    protected $casts = [
        'is_super_admin' => 'boolean',
    ];

    /** Permissions assigned to this role */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }

    /** Users that have this role */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /** Check if role has a specific module permission */
    public function hasPermission(string $moduleSlug): bool
    {
        if ($this->is_super_admin) {
            return true;
        }
        return $this->permissions->contains('module_slug', $moduleSlug);
    }
}
