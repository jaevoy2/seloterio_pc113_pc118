<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Order;

class RiderController extends Controller
{
    public function getDelivery() {
        $orders = Order::where('rider_id', Auth::user()->id)->whereIn('status', ['Assigned', 'in_transit'])->get();
        foreach($orders as $order) {
            $order->status = str_replace('_', ' ', ucwords(strtolower($order->status)));
        }
        return response()->json([
            'order' => $orders
        ]);
    }

    public function updateOrderStatus(Request $request) {
        try{
            $order = Order::find($request->id);
            $order['status'] = $request->status;
            $order->update();

            return response()->json([
                'message' => 'Status Updated'
            ]);
        }catch(Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }
}
