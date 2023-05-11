<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::Create(['id_option'=>1,'name'=>'Latte','price'=>70000]);
        Menu::Create(['id_option'=>2,'name'=>'Cappuccino','price'=>85000]);
        Menu::Create(['id_option'=>3,'name'=>'Espresso','price'=>60000]);
        Menu::Create(['id_option'=>null,'name'=>'Tea','price'=>35000]);
        Menu::Create(['id_option'=>2,'name'=>'Hot Chocolate','price'=>50000]);
        Menu::Create(['id_option'=>4,'name'=>'Cookie','price'=>40000]);
    }
}
