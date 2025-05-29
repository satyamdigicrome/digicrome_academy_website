<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Collection extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'tag_line',
        'description',
        'meta_description',
        'meta_keywords',
        'meta_title',
        'position',
        'us_position',
        'status',
        'user_id',
        'image',
        'slug',
    ];
    public function courses()
{
    return $this->hasMany(Course::class);
}
public function getRouteKeyName()
    {
        return 'slug';
    }

}
