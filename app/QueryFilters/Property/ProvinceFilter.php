<?php

namespace App\QueryFilters\Property;

use Closure;

class ProvinceFilter
{
    public function handle($request, Closure $next)
    {
        if(!request()->has('province')) {
            return $next($request);
        }

        return $next($request)->where('province', request()->input('province'));
    }
}
