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
            $order['status'] = 'in_transit';
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

    public function scannedDetails(Request $request) {
        try{
            $order = Order::find($request->id);
            $rider = Order::with('rider')->where('rider_id', Auth::user()->id)->first();
            return response()->json([
                'order' => $order,
                'rider' => $rider
            ]);
        }catch(Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function storeProof(Request $request) {
        try{
            $validate = $request->validate([
                'order_id' => 'required',
                'image' => 'required'
            ]);
            $order = Order::find($request->order_id);
            $riderId = Order::with('rider')->where('rider_id', Auth::user()->id)->first();
            $rider = User::find($riderId->rider->id);

            $imageData = $request->input('image');
            [$meta, $data] = explode(';base64', $imageData);
            $imageBinary = base64_decode($data);
            $filename = uniqid() . '.png';
            $path = 'storage/images/' . $filename;
            file_put_contents(public_path('storage/images/' . $filename), $imageBinary);

            $order->proof = $path;
            $order->status = 'Delivered';
            $rider->status = 'available';
            $order->save();
            $rider->save();

            if($order) {
                return response()->json([
                    'message' => 'Success',
                    'rider' => $rider
                ]);
            }
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function myHistory() {
        $order = Order::with('rider')->where('rider_id', Auth::user()->id)->get();
        return response()->json($order);
    }

}
