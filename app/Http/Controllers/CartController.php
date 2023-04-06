<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Deal;
use App\Models\Item;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|integer',
            'is_deal' => 'required|boolean',
            'quantity' => 'required|integer|min:1',
        ]);

        $restaurant_id = $request->is_deal ?
            Deal::findOrFail($request->product_id)->restaurant_id :
            Item::findOrFail($request->product_id)->restaurant_id;

        // Check if the current cart belongs to a different restaurant.
        $currentCartItems = CartItem::where('customer_id', $request->customer_id)->get();
        if ($currentCartItems->isNotEmpty()) {
            $firstCartItem = $currentCartItems->first();
            $firstProduct = $firstCartItem->product;
            $firstRestaurantId = $request->is_deal ? $firstProduct->restaurant_id : $firstProduct->restaurant_id;

            if ($firstRestaurantId != $restaurant_id) {
                // Remove all items from the current cart.
                CartItem::where('customer_id', $request->customer_id)->delete();
            }
        }

        $cartItem = CartItem::updateOrCreate(
            [
                'customer_id' => $request->customer_id,
                'product_id' => $request->product_id,
                'is_deal' => $request->is_deal,
            ],
            [
                'quantity' => $request->quantity,
            ]
        );

        return response()->json(['message' => 'Product added to cart', 'cart_item' => $cartItem], 201);
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'cart_item_id' => 'required|integer',
        ]);

        $customer_id = $request->customer_id;
        $cart_item_id = $request->cart_item_id;

        $cartItem = CartItem::where('customer_id', $customer_id)
            ->where('id', $cart_item_id)
            ->first();

        if (!$cartItem) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }

        $cartItem->delete();

        return response()->json(['message' => 'Item removed from the cart'], 200);
    }

    public function getCart(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|integer',
        ]);

        $customer_id = $request->customer_id;

        $cartItems = CartItem::with('product')
            ->where('customer_id', $customer_id)
            ->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 404);
        }

        $subtotal = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        $tax_amount = $subtotal * 0.05;
        $total_amount = $subtotal + $tax_amount;
        $restaurant_id = $cartItems->first()->product->restaurant_id;

        return response()->json([
            'cart_items' => $cartItems,
            'subtotal' => $subtotal,
            'tax_amount' => $tax_amount,
            'total_amount' => $total_amount,
            'restaurant_id' => $restaurant_id
        ]);
    }
}
