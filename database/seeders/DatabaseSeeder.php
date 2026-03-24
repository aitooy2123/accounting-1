<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CustomerSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // สร้าง user 100 คน
        \App\Models\User::factory(100)->create();

        // เรียก CustomerSeeder
     \App\Models\Customer::factory(50)->create();

    }
}
