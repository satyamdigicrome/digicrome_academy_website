<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articals';

    protected $fillable = ['image', 'heading', 'link', 'date'];
}
