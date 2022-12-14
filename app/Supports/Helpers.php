<?php

use App\Models\Blog;
use App\Models\Settings;
//use \Statickidz\GoogleTranslate;
use Stichoza\GoogleTranslate\GoogleTranslate;

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

if (!function_exists('checkBox')) {
  
    function checkBox($val)
    {
        if($val === 'on'){
            return true;
        }
    }
}

function translateText($text)
{
    try {
        $trans = new GoogleTranslate();
        $translation = $trans->setSource('en')->setTarget('en')->translate($text); //$trans->translate('en', 'yo', $text);
        return $translation;
    } catch (\Throwable $th) {
        return $text;
    } 
}