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
        'about',
        'has_faqs',
        'status',
        'user_id',
        'image',
    ];
    public function collection()
{
    return $this->belongsTo(Collection::class);
}
public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function keypoints()
{
    return $this->hasMany(KeyPoint::class);
}

public function faqs()
{
    return $this->hasMany(Faq::class);
}
public function aparts()
{
    return $this->hasMany(Apart::class);
}

// For part 1
public function extraPartOne()
{
    return $this->hasMany(Extra::class)->where('part', 1);
}

// For part 2
public function extraPartTwo()
{
    return $this->hasMany(Extra::class)->where('part', 2);
}
public function projects()
{
    return $this->hasMany(Project::class);
}
public function caseStudies()
{
    return $this->hasMany(CaseStudy::class);
}
public function keyFeatures()
{
    return $this->hasMany(KeyFeature::class);
}
public function modules()
{
    return $this->hasMany(Module::class);
}






}
