<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'external_id',
        'name',
        'address',
        'amount',
        'status',
        'rider_id'
    ];

    public function rider() {
        return $this->belongsTo(User::class);
    }
}
