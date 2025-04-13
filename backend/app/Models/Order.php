<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'external_id',
        'customer_name',
        'product',
        'description',
        'price',
        'status'
    ];
}
