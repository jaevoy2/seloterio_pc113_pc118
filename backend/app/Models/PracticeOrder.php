<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PracticeOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'product',
        'address',
        'price',
        'status'
    ];
}
