<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrders()
    {
        $userId = Auth::id(); // Get the ID of the currently logged-in user

        // Get all orders for this user with related item and orderInfo
        $rawOrders = Order::with(['item', 'orderInfo'])
            ->whereHas('orderInfo', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->get();

        // Group by order_id, and then by item_id + size to combine duplicates
        $groupedOrders = $rawOrders->groupBy('order_id');

        // Send the grouped data to the view
        return view('account', compact('groupedOrders'));
    }
}
