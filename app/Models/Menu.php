<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    public function option() {
        return $this->belongsTo(Option::Class,'id_option');
    }
    public function orderItems() {
        return $this->hasMany(OrderItem::Class,'id_menu');
    }
}