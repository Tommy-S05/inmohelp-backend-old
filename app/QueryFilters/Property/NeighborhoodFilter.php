<?php

namespace App\QueryFilters\Property;

use Closure;

class NeighborhoodFilter
{
    public function handle($request, Closure $next)
    {
        if(!request()->has('neighborhood')) {
            return $next($request);
        }

        return $next($request)->where('neighborhood', request()->input('neighborhood'));
    }
}
