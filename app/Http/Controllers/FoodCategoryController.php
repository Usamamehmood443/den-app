<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodCategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $foodCategory = FoodCategory::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'message' => 'Food category created successfully.',
            'food_category' => $foodCategory
        ]);
    }
}
