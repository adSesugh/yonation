<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class Resume extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'job_id',
        'fullname',
        'email',
        'phone',
        'mobile_no',
        'gender',
        'birthdate',
        'domain',
        'school_name',
        'year_from',
        'year_to',
        'course',
        'degree_id',
        'slug'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->slug = Str::slug($model->fullname);
        });

        self::updating(function($model) {
            $model->slug = Str::slug($model->fullname);
        });
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class);
    }

    public function scopeIsProcessed($query)
    {
        return $query->where('treated', true);
    }

    public function scopeIsPending($query)
    {
        return $query->where('treated', false);
    }
}
