<?php

namespace App\Http\Controllers;

use App\Models\Neighborhood;
use Illuminate\Http\Request;

class PriceIndexController extends Controller
{
    public function index()
    {
        $priceIndex = Neighborhood::paginate(10);
        return response()->json($priceIndex);
    }
}
