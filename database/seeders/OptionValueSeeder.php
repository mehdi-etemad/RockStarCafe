<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OptionValue;

class OptionValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OptionValue::Create(['id_option'=>1,'name'=>'Skim']);
        OptionValue::Create(['id_option'=>1,'name'=>'Semi']);
        OptionValue::Create(['id_option'=>1,'name'=>'Whole']);
        OptionValue::Create(['id_option'=>2,'name'=>'Small']);
        OptionValue::Create(['id_option'=>2,'name'=>'Medium']);
        OptionValue::Create(['id_option'=>2,'name'=>'Large']);
        OptionValue::Create(['id_option'=>3,'name'=>'Single']);
        OptionValue::Create(['id_option'=>3,'name'=>'Double']);
        OptionValue::Create(['id_option'=>3,'name'=>'Triple']);
        OptionValue::Create(['id_option'=>4,'name'=>'chocolate Chip']);
        OptionValue::Create(['id_option'=>4,'name'=>'ginger']);
    }
}
