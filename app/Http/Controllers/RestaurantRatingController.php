<?php

namespace App\Http\Controllers;

use App\Models\RestaurantRating;

use Illuminate\Http\Request;

class RestaurantRatingController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'customer_id' => 'required|exists:customers,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $rating = RestaurantRating::create($validatedData);

        return response()->json([
            'message' => 'Rating created successfully',
            'rating' => $rating
        ]);
    }
}
