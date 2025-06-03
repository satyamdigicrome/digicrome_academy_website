<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logo extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'image',
        'user_id',
        'type',
        'name',
        'course_id',
        'country',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function course()
{
    return $this->belongsTo(Course::class);
}

}
