<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrders()
    {
        $userId = Auth::id();

        $rawOrders = Order::with(['item', 'orderInfo'])
            ->whereHas('orderInfo', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->get();

        $groupedOrders = $rawOrders->groupBy('order_id');

        return view('account', compact('groupedOrders'));
    }
}
