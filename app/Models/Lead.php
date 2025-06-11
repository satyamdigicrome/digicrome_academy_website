<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'experience',
        'qualification',
        'message',
        'key1',
        'key2',
        'key3',
        'key4',
        'key5',
    ];
}
