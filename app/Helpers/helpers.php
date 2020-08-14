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
