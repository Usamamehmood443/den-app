<?php

namespace App\Http\Controllers;

use App\Models\RestaurantListingTag;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantListingTagController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'name' => 'required|in:Trending,Favorite,Discover',
        ]);

        $tag = RestaurantListingTag::create($validatedData);

        return response()->json([
            'message' => 'Restaurant listing tag created successfully.',
            'tag' => $tag
        ]);
    }

    public function getRestaurantsByTag(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|in:Trending,Favorite,Discover',
        ]);

        $tag = $validatedData['name'];

        $restaurants = Restaurant::whereHas('tags', function ($query) use ($tag) {
            $query->where('name', $tag);
        })->get();

        return response()->json([
            'message' => "Restaurants with tag '$tag'",
            'restaurants' => $restaurants
        ]);
    }
}
