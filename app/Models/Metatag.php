<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metatag extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name',
        'title',
        'keywords',
        'description',
        'user_id',
    ];
}
