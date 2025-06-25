<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'title',
        'company_name',
        'location',
        'description',
        'type',
        'experience_level',
        'salary',
        'industry',
        'requirements',
    ];
}
