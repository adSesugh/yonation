<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'domain_id',
        'description',
        'slug'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->slug = Str::slug($model->title);
        });

        self::updating(function($model) {
            $model->slug = Str::slug($model->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function scopeIsActive($query)
    {
        return $query->where('active', true);
    }
}
