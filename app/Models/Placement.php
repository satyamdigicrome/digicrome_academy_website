<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'position',
        'package',
        'user_id',
        'category',
    ];

    public function scopeCategory($query ,string $category)
    {
        if ($category) {
            return $query->where('category', $category);
        }
        return $query;
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
