<?php

use App\Models\Blog;
use App\Models\Settings;

if (!function_exists('getSetting')) {
  
    function getSetting($key)
    {
        $value = Settings::where('key', $key)->pluck('value')->first();
        return $value;
    }
}

if (!function_exists('getBlogs')) {
  
    function getBlogs()
    {
        $blogs = Blog::with(['media', 'category'])->orderBy('created_at', 'desc')->latest()->limit(3)->get();
        
        return $blogs;
    }
}