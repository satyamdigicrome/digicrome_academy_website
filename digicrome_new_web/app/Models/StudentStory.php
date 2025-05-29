<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentStory extends Model
{
    protected $fillable = [
        'studentname',
        'position',
        'companyname',
        'stoire',
        'image',
        'userid',
    ];
    
}
