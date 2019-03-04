<?php

if (!function_exists('studly_method_name'))
{
    function studly_method_name($name)
    {
        return lcfirst(\Illuminate\Support\Str::studly($name));
    }
}
