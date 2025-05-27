<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function role() {
        return $this->belongsToMany(Role::class, 'users_permissions');
    }

    public function menu() {
        return $this->belongsToMany(Menu::class, 'menu_permissions');
    }
}
