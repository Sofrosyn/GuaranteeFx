<?php

use App\Actions\SettingsManager;

if (!function_exists('int_random')) {
    function int_random(int $length):int
    {
        $min  = str_repeat(1, $length);
        $max = str_repeat(9, $length);
        return random_int($min, $max);
    }
}

if (!function_exists('remove_html')) {
    function remove_html(?string $raw_string)
    {
        $stripped_html = strip_tags($raw_string);

        return str_replace('&nbsp;', ' ', $stripped_html);
    }
}

if (!function_exists('full_name_regex')) {
    function full_name_regex(): string
    {
        return "/^\w+\s\w++(\s\w+)?$/i";
    }
}

if (!function_exists('settings')) {
    /**
     * @param null $key
     * @return SettingsManager|mixed|null
     */
    function settings($key = null)
    {
        $manager = new SettingsManager();

        if (!$key) {
            return $manager;
        }

        return $manager->get($key);
    }
}
