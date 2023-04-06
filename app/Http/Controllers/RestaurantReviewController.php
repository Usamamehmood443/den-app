<?php

namespace App\Http\Controllers;

use App\Models\RestaurantReview;

use Illuminate\Http\Request;

class RestaurantReviewController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'customer_id' => 'required|exists:customers,id',
            'content' => 'required|string|max:1000',
        ]);

        $review = RestaurantReview::create($validatedData);

        return response()->json([
            'message' => 'Review created successfully',
            'review' => $review
        ]);
    }
}
