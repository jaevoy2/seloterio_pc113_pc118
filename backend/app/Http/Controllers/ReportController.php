<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Order;
use App\Models\User;

class ReportController extends Controller
{
    public function reportList() {
        $orders = Order::with('rider')->where('status', 'Delivered')
        ->whereMonth('updated_at', Carbon::now()->month)
        ->whereYear('updated_at', Carbon::now()->year)
        ->get();

        return response()->json([
            'month' => Carbon::now()->month,
            'orders' => $orders
        ]);
    }

    public function filterMonth(Request $request) {
        $query = Carbon::createFromDate(null, $request->month_id, 1);

        $orders = Order::with('rider')->where('status', 'Delivered')
        ->whereMonth('updated_at', $query->month)
        ->whereYear('updated_at', Carbon::now()->year)
        ->get();

        return response()->json([
            'month' => $query,
            'orders' => $orders
        ]);
    }
}
