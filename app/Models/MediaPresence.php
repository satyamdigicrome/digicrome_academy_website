<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MediaPresence extends Model
{
    use HasFactory;
    protected $table = 'media_presence';
    protected $fillable = ['image', 'heading', 'description'];
}
