<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_type',
        'content',
        'user_id',
    ];

    // If you want to define relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
