<?php

if (!function_exists('isRoute')) {
    function isRoute($routeName, $activeClass = 'active-menu')
    {
        return request()->routeIs($routeName) ? $activeClass : '';
    }
}
