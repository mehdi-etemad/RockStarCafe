<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    protected $table = 'option_value';

    public function option() {
        $this->belongsTo(Option::Class,'id_option');
    }
}