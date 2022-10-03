<?php

use App\Models\Settings;

if (!function_exists('getSetting')) {
  
    function getSetting($key)
    {
        $value = Settings::where('key', $key)->pluck('value')->first();
        return $value;
    }
}