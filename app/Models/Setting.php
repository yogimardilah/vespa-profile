<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function get($key, $default = null)
    {
        $cacheKey = 'setting:' . $key;

        return Cache::rememberForever($cacheKey, function () use ($key, $default) {
            $setting = self::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        });
    }

    public static function set($key, $value)
    {
        $record = self::updateOrCreate(['key' => $key], ['value' => $value]);
        // Invalidate cache for this key
        Cache::forget('setting:' . $key);
        return $record;
    }
}
