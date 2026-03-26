<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;


class CustomerSeeder extends Seeder
{
    public function run()
    {
        $firstNames = [
            'วีระ','ปกรณ์','ชลธิชา','มนัส','กมลชนก','ทินกร','วรัญญา','เกรียงไกร',
            'ณัฐวุฒิ','เบญจพร','ศุภชัย','อาภาภรณ์','จักรกฤษณ์','สุจิตรา','ภาณุพงศ์','นลินี'
        ];

        $lastNames = [
            'เกษมสุข','ทรัพย์อนันต์','วัฒนชัย','กุลวงศ์','บุญเลิศ','แสงทอง','จิตรดี','มั่งมี',
            'สิริโชค','ชนะชัย','อินทรา','ศรีวงศ์','พงษ์ศักดิ์','อุดมทรัพย์','คงมั่น','รุ่งกิจ'
        ];

        $companyNames = [
            'หจก. อุดรพัฒนา','หจก. เจริญกิจการ','หจก. ทรัพย์รุ่งเรือง','หจก. ศรีอีสาน',
            'หจก. โชคทวีทรัพย์','หจก. พูนผลการค้า','หจก. มงคลกิจ','หจก. ไทยอุตสาหกิจ'
        ];

        $addresses = [
            '123 หมู่ 1 ต.บ้านเลื่อม อ.เมือง จ.อุดรธานี',
            '45/2 หมู่ 5 ต.หนองบัว อ.เมือง จ.อุดรธานี',
            '99 หมู่ 3 ต.หมากแข้ง อ.เมือง จ.อุดรธานี',
            '12/8 หมู่ 7 ต.สามพร้าว อ.เมือง จ.อุดรธานี',
            '88 หมู่ 9 ต.หนองไผ่ อ.เมือง จ.อุดรธานี',
            '55/1 หมู่ 2 ต.กุดสระ อ.เมือง จ.อุดรธานี',
            '77 หมู่ 4 ต.ในเมือง อ.เมือง จ.ขอนแก่น',
            '21/6 หมู่ 8 ต.สุรนารี อ.เมือง จ.นครราชสีมา',
            '14 หมู่ 3 ต.โพธิ์ชัย อ.เมือง จ.ร้อยเอ็ด',
            '66/9 หมู่ 5 ต.ธาตุเชิงชุม อ.เมือง จ.สกลนคร'
        ];

        foreach (range(1, 50) as $i) {

            $isCompany = rand(0, 1);

            if ($isCompany) {
                $name = $companyNames[array_rand($companyNames)];
                $companyName = $name;
            } else {
                $name = $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
                $companyName = null;
            }

            $address = $addresses[array_rand($addresses)];

            $taxId = str_pad(rand(1, 9999999999999), 13, '0', STR_PAD_LEFT);

            $customerCode = 'CUST' . str_pad($i, 4, '0', STR_PAD_LEFT);

            Customer::create([
                'customer_code' => $customerCode,
                'name' => $name,
                'company_name' => $companyName,
                'tax_number' => $taxId,
                'phone' => '08' . rand(10000000, 99999999),
                'email' => 'customer' . $i . '@example.com',
                'address' => $address,
            ]);
        }
    }
}
}
