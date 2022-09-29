<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function job()
    {
        return $this->hasMany(Job::class);
    }
}
