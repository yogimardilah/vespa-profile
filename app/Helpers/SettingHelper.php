<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    /**
     * Get a setting value from the database
     *
     * @param string $key The setting key
     * @param mixed $default Default value if key doesn't exist
     * @return mixed
     */
    function setting(string $key, $default = null)
    {
        return Setting::get($key, $default);
    }
}
