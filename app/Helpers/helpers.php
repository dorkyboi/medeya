<?php

if (!function_exists('setCity')) {
    function setCity(string $city) {
        session()->put('city', $city);
    }
}

if (!function_exists('getCity')) {
    function getCity() {
        return session()->get('city');
    }
}

if (!function_exists('replaceRequestSegment')) {
    function replaceRequestSegment(int $index, $value) {
        $segments = request()->segments();
        $segments[$index] = $value;
        return implode('/', $segments);
    }
}

if (!function_exists('replaceRequestLocale')) {
    function replaceRequestLocale(string $locale) {
        return '/' . replaceRequestSegment(0, $locale);
    }
}

if (!function_exists('replaceRequestCity')) {
    function replaceRequestCity(string $city) {
        return '/' . replaceRequestSegment(1, $city);
    }
}

if (!function_exists('indexLink')) {
    function indexLink() {
        return '/' . app()->getLocale() . '/' . getCity();
    }
}
