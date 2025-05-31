<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable = ['user_id', 'video_link', 'name', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
