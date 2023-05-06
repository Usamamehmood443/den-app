<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_name' => 'required',
            'email' => 'required|email|unique:restaurants',
            'phone' => 'required',
            'company_registration_no' => 'required|unique:restaurants',
            'zimra_bp_no' => 'required|unique:restaurants',
            'latitude' => 'required',
            'longitude' => 'required',
            'open_time' => 'required',
            'close_time' => 'required',
            'food_category_id' => 'required',
            'dine_in' => 'required',
            'service_type' => 'required',
            'image_path' => 'required',
            'contact_person_name' => 'required',
            'contact_person_phone' => 'required',
            'contact_person_designation' => 'required',
            'contact_person_email' => 'required',
        ]);

        $restaurant = Restaurant::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Restaurant created successfully',
            'data' => [
                'restaurant' => $restaurant,
            ],
        ]);
    }

    public function index()
    {
        $restaurants = Restaurant::all();

        return response()->json([
            'success' => true,
            'message' => 'Restaurants retrieved successfully.',
            'data' => [
                'restaurants' => $restaurants,
            ],
        ]);
    }

    public function getRestaurantByTag(Request $request, $tag)
    {
        // Get the authenticated customer
        $customer = $request->user();

        // Get the customer's latitude and longitude from the customer model
        $customerLatitude = $customer->latitude;
        $customerLongitude = $customer->longitude;

        $restaurants = Restaurant::whereHas('tags', function ($query) use ($tag) {
            $query->where('name', $tag);
        })
            ->withCount('reviews')
            ->with(['ratings' => function ($query) {
                $query->select(DB::raw('ROUND(AVG(rating), 1) as average_rating'), 'restaurant_id')
                    ->groupBy('restaurant_id');
            }])
            ->get();

        // Calculate the distance for each restaurant
        $restaurants->each(function ($restaurant) use ($customerLatitude, $customerLongitude) {
            $restaurant->distance = haversineDistance(
                $customerLatitude,
                $customerLongitude,
                $restaurant->latitude,
                $restaurant->longitude
            );
        });

        return response()->json([
            'success' => true,
            'message' => 'Restaurants retrieved successfully by tag.',
            'data' => [
                'restaurants' => $restaurants,
            ],
        ]);
    }

    public function getRestaurantDetails($id)
    {

        $restaurant = Restaurant::with(['deals', 'deals.items', 'items', 'items.foodCategory'])
            ->withCount(['reviews', 'ratings'])
            ->findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Restaurant details retrieved successfully.',
            'data' => [
                'restaurant' => $restaurant,
            ],
        ]);
    }
}
