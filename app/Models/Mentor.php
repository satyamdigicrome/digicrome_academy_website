<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentor'; // 👈 use singular table name

    protected $fillable = [
        'course_id',
        'user_id',
        'name',
        'description',
        'position',
        'experience',
        'photo',
    ];

    // Optional relationships
    public function course()
{
    return $this->belongsTo(Course::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
