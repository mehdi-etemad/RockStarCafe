<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Option::Create(['name'=>'Milk']);
        Option::Create(['name'=>'Size']);
        Option::Create(['name'=>'Shot']);
        Option::Create(['name'=>'Kind']);
    }
}
