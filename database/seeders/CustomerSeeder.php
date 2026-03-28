<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('th_TH');

        foreach (range(1, 100) as $i) {
            $isCompany = $faker->boolean(40); // 40% เป็นบริษัท

            if ($isCompany) {
                $companyName = $faker->company();
                $name = $companyName;
            } else {
                $name = $faker->name();
                $companyName = '-';
            }

            Customer::create([
                'customer_code' => 'CUST' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'name' => $name,
                'company_name' => $companyName,
                'tax_number' => $faker->numerify('#############'), // 13 หลัก
                'phone' => '08' . $faker->numerify('########'),
                'email' => $faker->unique()->safeEmail(),
                'address' => $faker->address(),
            ]);
        }
    }
}
