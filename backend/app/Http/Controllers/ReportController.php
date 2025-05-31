<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Order;
use App\Models\User;
use Exception;

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

    public function exportCsv(Request $request) {
        try {
            $orders = Order::join('users', 'orders.rider_id', '=', 'users.id')
            ->select('orders.*', 'users.firstname', 'users.middlename', 'users.lastname')
            ->whereMonth('orders.updated_at', $request->month_id)
            ->where('orders.status', 'Delivered')->get();

            $query = Carbon::createFromDate(null, $request->month_id, 1);
            $month = $query->format('F');
            $filename = 'Month_of_' . $month . '_Report_' . now()->year . '.csv';

            return response()->stream(function() use ($orders, $filename) {
                $file = fopen('php://output', 'w');
                fputcsv($file, ['Order ID', 'Customer Name', 'Amount', 'Address', 'Assigned Rider', 'Status', 'Delivered At']);

                foreach ($orders as $order) {
                    fputcsv($file, [
                        'ORD#' . $order->external_id,
                        $order->name,
                        $order->amount,
                        $order->address,
                        "{$order->firstname} {$order->lastname}",
                        $order->status,
                        $order->updated_at->format('Y-m-d')
                    ]);
                }
                fclose($file);

            }, 200, [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ]);
        }catch(Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }
}
