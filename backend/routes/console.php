<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
// use Exception;
use App\Models\PracticeOrder;
use App\Models\Order;
use Illuminate\Support\Facades\Http;


Artisan::command('fetch:orders', function() {
    try {

        $response = Http::get('https://backend-folder.test/api/practice-order');
        $orders = $response->json();

        if ($response->failed()) {
            ('Request failed: ' . $response->status());
            return;
        }

        foreach($orders as $order) {
            if($order['status'] == 'to_be_deliver') {
                $alreadyInserted = Order::where('external_id', $order['id'])->first();

                if(!$alreadyInserted) {
                    Order::create([
                        'external_id' => $order['id'],
                        'name' => $order['customer_name'],
                        'status' => $order['status'],
                        'address' => $order['address'],
                        'amount' => $order['amount']
                    ]);
                }
            }
        }
    }catch(Exception $e) {
        \Log::error($e->getMessage());
    }
})->everyMinute();
// ->everyTwoMinutes();
