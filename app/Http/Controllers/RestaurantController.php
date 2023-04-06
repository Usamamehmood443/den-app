<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

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
            'message' => 'Restaurant created successfully',
            'restaurant' => $restaurant,
        ]);
    }

    public function index()
    {
        $restaurants = Restaurant::all();

        return response()->json([
            'message' => 'Restaurants retrieved successfully.',
            'restaurants' => $restaurants
        ]);
    }
}
