<?php


if (!function_exists('on_page')) {
    function on_page($path)
    {
        return request()->routeIs($path);
    }
}

if (!function_exists('return_if')) {
    function return_if($condition, $value)
    {
        return $condition ? $value : '';
    }
}