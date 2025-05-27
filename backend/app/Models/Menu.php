<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'menu_permissions');
    }
}
