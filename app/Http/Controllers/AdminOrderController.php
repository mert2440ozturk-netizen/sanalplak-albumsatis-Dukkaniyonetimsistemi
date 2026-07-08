<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function show($id)
    {
        $order = Order::find($id);

        if($order == null){
            abort(404);
        }

        return view('admin.orders.show', ['order' => $order]);

    }
}
