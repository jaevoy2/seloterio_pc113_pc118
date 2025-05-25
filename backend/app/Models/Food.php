<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function orders() {
        return $this->belongsToMany(PracticeOrder::class, 'order_items', 'food_id', 'order_id');
    }

}
