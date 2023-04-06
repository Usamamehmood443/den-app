<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string',
            'category_id' => 'required|exists:food_categories,id',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        $item = Item::create($validatedData);

        return response()->json([
            'message' => 'Item created successfully',
            'item' => $item
        ]);
    }
}
