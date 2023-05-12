<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'option';

    public function values() {
        return $this->hasMany(OptionValue::Class,'id_option');
    }
    public function menus() {
        return $this->hasMany(Menu::Class, 'id_option');
    }
}