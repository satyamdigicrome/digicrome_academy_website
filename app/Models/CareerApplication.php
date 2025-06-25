<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'vacancy_id',
        'name',
        'email',
        'phone',
        'cover_letter',
        'resume_path',
    ];
}
