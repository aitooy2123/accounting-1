<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // สร้างผู้ใช้ 100 คน
        \App\Models\User::factory(100)->create();

        // เรียก CustomerSeeder
 $this->call([
        CustomerSeeder::class,
    ]);
        // เรียก AccountSeeder
        $this->call(\Database\Seeders\AccountSeeder::class);
    }
}
