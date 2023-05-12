<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_item';

    public function order() {
        return $this->belongsTo(Order::Class,'id_order');
    }
    public function menu() {
        return $this->belongsTo(Menu::Class,'id_menu');
    }
    public function optionValue() {
        return $this->belongsTo(optionValue::Class,'id_option_value');
    }
}