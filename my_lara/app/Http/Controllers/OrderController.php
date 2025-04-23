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
        $groupedOrders = $rawOrders->groupBy('order_id')->map(function ($ordersInOneOrder) {
            return $ordersInOneOrder->groupBy(fn($order) => $order->item_id . '_' . $order->size)->map(function ($duplicates) {
                $first = $duplicates->first();
                $first->quantity = $duplicates->count(); // add quantity property
                return $first;
            });
        });

        // Send the grouped data to the view
        return view('account', compact('groupedOrders'));
    }
}
