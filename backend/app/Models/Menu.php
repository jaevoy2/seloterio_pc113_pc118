<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name'
    ];

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'menu_permissions');
    }
}
