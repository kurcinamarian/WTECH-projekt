<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ShoppingCart;

// Import the ShoppingCart model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {
        // Validate the request data
        $request->validate([
            'size' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]);





        // Retrieve the current user or guest ID
        $userId = auth()->check() ? auth()->id() : null;
        $sessionId = session()->getId();


        // Get the quantity and validate it
        $quantity = $request->input('quantity');
        $itemId = $request->input('item_id');
        $size = $request->input('size');

        // Insert the records in the shopping_cart table using Eloquent
        $cart= ShoppingCart::where('session_id', $sessionId)->where('item_id', $itemId)->where('size', $size)->first();


        if($cart){
            $cart->quantity += $quantity;
            $cart->save();
        }
        else{
            $cart = ShoppingCart::create([
                'item_id' => $itemId,
                'user_id' => $userId,
                'size' => $size,
                'quantity' => $quantity,
                'session_id' => $sessionId
            ]);
        }




        // Return a success message
        return redirect()->back()->with('success', 'Item(s) added to cart successfully!');
    }


    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'cart_item_id' => 'required',
        ]);

        // Get the quantity and validate it
        $quantity = $request->input('quantity');
        $itemId = $request->input('cart_item_id');

        $item = ShoppingCart::find($itemId);
        $item->update(['quantity' => $quantity]);


        // Return a success message
        return redirect()->back()->with('success', 'Item(s) updated successfully!');
    }

    public function delete(Request $request)
    {
        // Validate the request data
        $request->validate([
            'cart_item_id' => 'required',
        ]);

        $itemId = $request->input('cart_item_id');

        $item = ShoppingCart::find($itemId);
        $item->delete();


        // Return a success message
        return redirect()->back()->with('success', 'Item(s) deleted successfully!');
    }

    public function index()
    {
        $userId = auth()->check() ? auth()->id() : null;
        $sessionId = session()->getId();

        if ($userId){
            // Get all orders for this user with related item and orderInfo
            $cartItems = ShoppingCart::where('user_id', $userId)->get();
        }
        else{
            $cartItems = ShoppingCart::where('session_id', $sessionId)->get();
        }
        $activeTab = request('tab','cart');


        // Send the grouped data to the view
        return view('shopping_cart', compact('cartItems', 'activeTab'));
    }

    public function save(request $request)
    {
        // Validate the request data
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'cart_item_id' => 'required',
        ]);

        // Get the quantity and validate it
        $quantity = $request->input('quantity');
        $itemId = $request->input('cart_item_id');

        $item = ShoppingCart::find($itemId);
        $item->update(['quantity' => $quantity]);


        // Return a success message
        return redirect()->back()->with('success', 'Item(s) updated successfully!');
    }


}
