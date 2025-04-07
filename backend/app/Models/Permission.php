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

    public function user() {
        return $this->belongsToMany(User::class, 'users_permissions');
    }

    public function menu() {
        return $this->belongsToMany(Menu::class, 'menus_permissions');
    }
}
