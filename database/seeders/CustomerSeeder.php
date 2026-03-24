<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $firstNames = ['สมชาย', 'สมหญิง', 'วิชัย', 'อรทัย', 'กิตติ', 'สุภาพร', 'ธนพล', 'จิราพร'];
        $lastNames = ['ใจดี', 'ทองสุข', 'มีชัย', 'บุญมา', 'ศรีสุข', 'พรมมา', 'วงศ์ดี', 'คำแก้ว'];

        $companyNames = [
            'บริษัท สมมุติ จำกัด',
            'บริษัท ตัวอย่าง จำกัด',
            'บริษัท ไทยเจริญ จำกัด',
            'บริษัท รุ่งเรือง จำกัด',
            'บริษัท ฟ้าสดใส จำกัด'
        ];

        $addresses = [
            '123 หมู่ 1 ต.บ้านเลื่อม อ.เมือง จ.อุดรธานี',
            '45/2 หมู่ 5 ต.หนองบัว อ.เมือง จ.อุดรธานี',
            '99 หมู่ 3 ต.หมากแข้ง อ.เมือง จ.อุดรธานี',
            '12/8 หมู่ 7 ต.สามพร้าว อ.เมือง จ.อุดรธานี',
            '88 หมู่ 9 ต.หนองไผ่ อ.เมือง จ.อุดรธานี',
            '55/1 หมู่ 2 ต.กุดสระ อ.เมือง จ.อุดรธานี',
        ];

        foreach (range(1, 100) as $i) {

            $isCompany = rand(0, 1); // 0 = บุคคล, 1 = บริษัท

            if ($isCompany) {
                $name = $companyNames[array_rand($companyNames)];
            } else {
                $name = $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
            }

            $address = $addresses[array_rand($addresses)];

            // สร้างเลขผู้เสียภาษี 13 หลักแบบสุ่ม
            $taxId = str_pad(rand(1, 9999999999999), 13, '0', STR_PAD_LEFT);

            Customer::updateOrCreate(
                ['customer_code' => $taxId],
                [
                    'name' => $name,
                    'phone' => '08' . rand(10000000, 99999999),
                    'email' => 'customer' . $i . '@example.com',
                    'address' => $address
                ]
            );
        }
    }
}
