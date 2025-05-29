<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KeyPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'email',
        'user_id',
        'course_id',
    ];
    // Define relationships if needed
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
