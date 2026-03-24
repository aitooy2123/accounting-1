<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $firstNames = ['สมชาย', 'สมหญิง', 'วิชัย', 'อรทัย', 'กิตติ', 'สุภาพร', 'ประยุทธ์', 'นฤมล', 'ธนพล', 'จิราพร'];
        $lastNames = ['ใจดี', 'ทองสุข', 'มีชัย', 'แซ่ลี้', 'บุญมา', 'ศรีสุข', 'พรมมา', 'วงศ์ดี', 'คำแก้ว', 'อินทร์แปลง'];

        $addresses = [
            '123 หมู่ 1 ต.บ้านเลื่อม อ.เมือง จ.อุดรธานี',
            '45/2 หมู่ 5 ต.หนองบัว อ.เมือง จ.อุดรธานี',
            '99 หมู่ 3 ต.หมากแข้ง อ.เมือง จ.อุดรธานี',
            '12/8 หมู่ 7 ต.สามพร้าว อ.เมือง จ.อุดรธานี',
            '88 หมู่ 9 ต.หนองไผ่ อ.เมือง จ.อุดรธานี',
            '55/1 หมู่ 2 ต.กุดสระ อ.เมือง จ.อุดรธานี',
        ];

        for ($i = 1; $i <= 100; $i++) {

            $firstName = $firstNames[array_rand($firstNames)];
            $lastName = $lastNames[array_rand($lastNames)];
            $address = $addresses[array_rand($addresses)];

            Customer::create([
                'customer_code' => str_pad($i, 13, '0', STR_PAD_LEFT),
                'name' => $firstName . ' ' . $lastName,
                'phone' => '08' . rand(10000000, 99999999),
                'email' => 'customer' . $i . '@example.com',
                'address' => $address
            ]);
        }
    }
}
