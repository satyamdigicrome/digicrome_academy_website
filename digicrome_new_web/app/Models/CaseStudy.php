<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseStudy extends Model
{
    use HasFactory;

    protected $table = 'case_studies'; // Specify the table name if it doesn't follow Laravel's convention

    protected $fillable = [
        'course_id',
        'user_id',
        'heading',
        'paragraph',
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
