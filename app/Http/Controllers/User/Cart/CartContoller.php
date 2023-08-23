<?php

namespace App\Http\Controllers\User\Cart;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartContoller extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->where('user_id', auth()->id())->get();
        
        foreach ($orders as $order) {
            $products[] = $order->product;
        }
        return view('cart.index', compact('products'));
    }
}
