<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all(['id', 'name', 'slug', 'city', 'purpose', 'price', 'area', 'bedrooms', 'bathrooms', 'garages']);
        $data = $properties;
        return response()->json([
            'success' => true,
            'message' => 'Properties retrieved successfully.',
            'data' => $data,
        ]);
    }

    public function outstanding()
    {
        //outstanding properties
        //        $properties = Property::where('outstanding', 1)->get(['id', 'name', 'slug', 'city', 'purpose', 'price', 'area', 'bedrooms', 'bathrooms', 'garages']);
        $properties = Property::orderBy('views', 'desc')
            ->take(5)
            ->get(['id', 'name', 'slug', 'city', 'purpose', 'price', 'area', 'bedrooms', 'bathrooms', 'garages', 'views']);
        $data = $properties;
        return response()->json([
            'success' => true,
            'message' => 'Properties retrieved successfully.',
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request)
    {
        //        return response()->json([
        //            'success' => true,
        //            'message' => 'Property created successfully.',
        //            'data' => $request->all(),
        //        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        return response()->json($property);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return response()->json([
            'success' => true,
            'message' => 'Property deleted successfully.',
        ]);
    }
}
