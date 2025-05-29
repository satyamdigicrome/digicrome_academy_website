<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apart extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'heading',
        'tagline',
        'paragraph',
        'course_id',
        'user_id',
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
