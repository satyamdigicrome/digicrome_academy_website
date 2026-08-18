<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    public function batchStartsAt(): ?Carbon
    {
        $raw = trim((string) $this->course_online_payment);

        if (! preg_match('#^(\d{1,2}[/-]\d{1,2}[/-]\d{4}|\d{4}-\d{1,2}-\d{1,2})$#', $raw)) {
            return null;
        }

        foreach (['d/m/Y', 'j/n/Y', 'd-m-Y', 'j-n-Y', 'Y-m-d', 'Y-n-j'] as $format) {
            try {
                $date = Carbon::createFromFormat($format, $raw);
            } catch (\Throwable $e) {
                continue;
            }

            // Round-trip guard: rejects values PHP coerces rather than parses,
            // e.g. a day of 32 silently rolling into the next month.
            if ($date && $date->format($format) === $raw) {
                return $date->startOfDay();
            }
        }

        return null;
    }

    /**
     * When the countdown should stop.
     *
     * The Batch Date carries no time of day, so counting down to 00:00 of that
     * date would retire the timer a full day early — a batch dated today would
     * show nothing at all. The countdown therefore runs to the END of the batch
     * date and stays live right through that day.
     */
    public function batchCountdownEndsAt(): ?Carbon
    {
        return $this->batchStartsAt()?->copy()->endOfDay();
    }

    /**
     * Human-readable batch date for display. Falls back to whatever the admin
     * typed, except for the legacy boolean leftovers which are meaningless to
     * a visitor — those currently render as a bare "1" under "Next Batch starts on".
     */
    public function batchLabel(): string
    {
        if ($date = $this->batchStartsAt()) {
            return $date->format('d M Y');
        }

        $raw = trim((string) $this->course_online_payment);

        return ($raw === '' || $raw === '1' || $raw === '0') ? 'Admissions Open' : $raw;
    }
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
        'singapore_price',
        'discount',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'about',
        'has_faqs',
        'status',
        'user_id',
        'collection_id',
        'image',
        'browser',
        'banner_image',
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
