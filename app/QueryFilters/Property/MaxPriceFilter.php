<?php

namespace App\QueryFilters\Property;

use Closure;

class MaxPriceFilter
{
    public function handle($request, Closure $next)
    {
        if(!request()->has('max_price')) {
            return $next($request);
        }

        return $next($request)->where('price', '<=', request()->input('max_price'));
    }
}
