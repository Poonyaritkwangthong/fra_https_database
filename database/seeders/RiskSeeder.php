<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('risk')->insert([
            [
                'risk_name' => 'ไม่มีความเสี่ยง',

            ],
            [
                'risk_name' => 'การเจ็บป่วยซ้ำ',

            ],
            [
                'risk_name' => 'การทำแท้ง/ทอดทิ้งบุตร',

            ],
            [
                'risk_name' => 'การทำร้ายผู้อื่น',

            ],
            [
                'risk_name' => 'การถูกล่วงละเมิด/ก่ออาชญากรรม/การเป็นเหยื่อการค้ามนุษย์',

            ],
            [
                'risk_name' => 'การรับเเละเเพร่เชื้อ HIV',

            ],
            [
                'risk_name' => 'การเกิดปัญหาสุขภาพจิต/จิตเวช',

            ],
            [
                'risk_name' => 'การหลบหนี',

            ],
            [
                'risk_name' => 'การมีปัญหาครอบครัว',

            ],
            [
                'risk_name' => 'การติดสารเสพติด/เสพซ้ำ',

            ],
            [
                'risk_name' => 'การฆ่าตัวตาย',

            ],
            [
                'risk_name' => 'การถูกกีดกัน/ถูกเลือกปฏิบัติจากชุมชนหรือสังคม/ไม่ได้รับความเป็นธรรม',

            ],
            [
                'risk_name' => 'การได้รับการเลี้ยงดู/ดูเเลไม่เหมาะสม',

            ],
            [
                'risk_name' => 'การถูกญาติทอดทิ้ง/ไม่ยอมรับ',

            ],

        ]);
    }
}
