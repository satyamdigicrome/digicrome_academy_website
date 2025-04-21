<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'sku',
        'tag_line',
        'corporate',
        'description',
        'key10', 'key9', 'key8', 'key7', 'key6',
        'key5', 'key4', 'key3', 'key2', 'key1',
        'course_free',
        'course_upcoming',
        'course_online_payment',
        'course_duration',
        'price',
        'dubai_price',
        'us_price',
        'discount',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'has_faqs',
        'status',
        'user_id'
    ];
    public function collection()
{
    return $this->belongsTo(Collection::class);
}

}
