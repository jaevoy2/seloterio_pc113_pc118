<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;

class DeliveryController extends Controller
{
    public function orders() {
        $orders = Order::with('rider')->where('status', '!=', 'Delivered')->get();
        foreach($orders as $order) {
            $order->status = ucwords(str_replace('_', ' ', $order->status));
        }
        return response()->json($orders);
    }

    public function deliveries() {
        $deliveries = Order::with('rider')->where('status', '!=', 'to_be_deliver')->get();
        foreach($deliveries as $delivery) {
            $delivery->status = ucwords(str_replace('_', ' ', $delivery->status));
        }
        return response()->json($deliveries);
    }

    public function riders() {
        $riderRole = ['Rider', 'Delivery Rider', 'Food Rider', 'Food Delivery Rider'];
        $status = ['active', 'available'];
        return response()->json([
            'riders' => User::with('role')
            ->where('status', $status)
            ->whereHas('role', function($query) use ($riderRole) {
                $query->whereIn('name', $riderRole);
            })
            ->get()
        ]);
    }

    public function reassignRiders() {
        $riderRole = ['Rider', 'Delivery Rider', 'Food Rider', 'Food Delivery Rider'];
        $status = ['Active', 'Available'];
        return response()->json([
            'riders' => User::with('role')
            ->whereHas('role', function($query) use ($riderRole) {
                $query->whereIn('name', $riderRole);
            })
            ->whereIn('status', $status)
            ->get()
        ]);
    }

    public function assigned(Request $request) {
        try{
            $validate = $request->validate([
                'order_id' => 'required',
                'rider_id' => 'required',
            ]);
            $order = Order::where('external_id', $validate['order_id'])->first();
            $rider = User::where('id', $validate['rider_id'])->first();
            if(!$order) {
                return response()->json([
                    'error' => 'Order not found'
                ]);
            }

            $validate['status'] = 'Assigned';
            $validate['rider_id'] = $request->rider_id;
            $order->update($validate);
            $rider->status = 'Assigned';
            $rider->save();

            return response()->json([
                'message' => 'Order assigned successfully'
            ]);
        }catch(ValidationException $error) {
            return response()->json([
                'error' => $error->getMessage()
            ]);
        }
    }

    public function saveReassign(Request $request) {
        try{
            $oldRider = User::find($request->old_id);
            $newRider = User::find($request->id);
            $order = Order::where('external_id', $request->order_id)->first();

            $order->rider_id = $newRider->id;
            $order->status = 'Assigned';
            $order->update();
            $newRider->status = 'Assigned';
            $newRider->update();
            $oldRider->status = 'available';
            $oldRider->update();

            return response()->json([
                'message' => 'Order reassigned successfully'
            ]);
        }catch(Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }
}
