<?php

namespace App\QueryFilters\Property;

use Closure;

class GaragesFilter
{
    public function handle($request, Closure $next)
    {
        if(!request()->has('garages')) {
            return $next($request);
        }

        return $next($request)->where('garages', request()->input('garages'));
    }
}
