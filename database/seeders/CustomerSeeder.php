<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
   public function run()
{
    $faker = \Faker\Factory::create();

    foreach (range(1, 50) as $i) {
        $isCompany = $faker->boolean(40);

        if ($isCompany) {
            $name = 'บริษัทตัวอย่าง';
            $companyName = $name;
        } else {
            $name = 'ลูกค้าทั่วไป ' . $i;
            $companyName = '-';
        }

        Customer::create([
            'customer_code' => 'CUST' . str_pad($i, 4, '0', STR_PAD_LEFT),
            'name' => $name,
            'company_name' => $companyName,
            'tax_number' => $faker->numerify('#############'), // 13 หลัก
            'phone' => '08' . $faker->numerify('########'),   // 08xxxxxxxx
            'email' => $faker->unique()->safeEmail(),
            'address' => 'อุดรธานี',
        ]);
    }
}
}
