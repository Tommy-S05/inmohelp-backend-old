<?php

namespace App\QueryFilters\Property;

use Closure;

class MinPriceFilter
{
    public function handle($request, Closure $next)
    {
        if(!request()->has('min_price')) {
            return $next($request);
        }

        return $next($request)->where('price', '>=', request()->input('min_price'));
    }
}
