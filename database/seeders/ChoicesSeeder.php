<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('choices')->insert([
            [
                'choice' => 'ไม่มีรายได้ทั้งจากตนเองหรือได้รับจากผู้อื่น',
                'point' => '0',
                'question_id' => '1',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีรายได้ของตนเอง (มีหนี้สิน ไม่มีเงินออม)',
                'point' => '1',
                'question_id' => '1',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีรายได้น้อยกว่ารายจ่าย (มีหนี้สิน ไม่มีเงินออม)',
                'point' => '2',
                'question_id' => '1',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีรายได้เท่ากับรายจ่าย (ไม่มีเงินออมและไม่มีปัญหาหนี้สิน)',
                'point' => '3',
                'question_id' => '1',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีรายได้สูงกว่ารายจ่าย แต่ไม่มีเงินออม (ไม่มีเงินออมและไม่มีปัญหาหนี้สิน)',
                'point' => '4',
                'question_id' => '1',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีรายได้สูงกว่ารายจ่าย (มีเงินออม ไม่มีปัญหาหนี้สิน)',
                'point' => '5',
                'question_id' => '1',
                'c_status' => 'start',
            ],
            [
                'choice' => ' ไม่มีที่อยู่แน่นอน เร่ร่อน ไร้บ้าน',
                'point' => '0',
                'question_id' => '2',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีที่อยู่แน่นอน แต่สภาพแวดล้อมไม่เหมาะสม',
                'point' => '1',
                'question_id' => '2',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ที่อยู่มีความเป็นสัดส่วน',
                'point' => '1',
                'question_id' => '2',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ที่อยู่ถุกสุขลักษณะ ความสะอาด เรียบร้อย',
                'point' => '1',
                'question_id' => '2',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ที่อยู่มีความปลอยภัยทางกายภาพ',
                'point' => '1',
                'question_id' => '2',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ที่อยู่มีพื้นที่ว่างในการทำกิจกรรม',
                'point' => '1',
                'question_id' => '2',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่ได้รับความรัก',
                'point' => '0',
                'question_id' => '3',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ดูเเลเอาใจใส่ เอื้ออาทร',
                'point' => '1',
                'question_id' => '3',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ส่งเสริม สนับสนุนทางจิตใจ กล่าวชื่นชม',
                'point' => '1',
                'question_id' => '3',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีการสัมผัสทางกาย',
                'point' => '1',
                'question_id' => '3',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ทำกิจกรรมร่วมกันสม่ำเสมอ',
                'point' => '1',
                'question_id' => '3',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีความสามารถในการเเก้ไขปัญหา',
                'point' => '0',
                'question_id' => '4',
                'c_status' => 'start',
            ],
            [
                'choice' => 'เผชิญปัญหาร่วมกัน',
                'point' => '1',
                'question_id' => '4',
                'c_status' => 'start',
            ],
            [
                'choice' => 'รับรู้ปัญหาและหาร่วมกัน',
                'point' => '1',
                'question_id' => '4',
                'c_status' => 'start',
            ],
            [
                'choice' => 'รับผิดชอบปัญหาร่วมกัน',
                'point' => '1',
                'question_id' => '4',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ช่วยกันเเก้ไขปัญา',
                'point' => '1',
                'question_id' => '4',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ยอมรับความเจ็บป่วย',
                'point' => '1',
                'question_id' => '4',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีความสามารถในการจัดการพฤติกรรม',
                'point' => '0',
                'question_id' => '5',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีทักษะการควบคุมพฤติกรรม',
                'point' => '1',
                'question_id' => '5',
                'c_status' => 'start',
            ],
            [
                'choice' => 'การฝึกให้เเรงเสริมที่เหมาะสม',
                'point' => '1',
                'question_id' => '5',
                'c_status' => 'start',
            ],
            [
                'choice' => ' ฝึกระเบียบวินัย',
                'point' => '1',
                'question_id' => '5',
                'c_status' => 'start',
            ],
            [
                'choice' => 'สมาชิกในครอบครัวรู้วิธีการดูเเลเมื่อผู้ป่วยมีปัญหา พฤติกรรม',
                'point' => '1',
                'question_id' => '5',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ยอมรับกฎ กติกาของครอบครัว',
                'point' => '1',
                'question_id' => '5',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีการยอมรับหรือให้กำลังใจ',
                'point' => '0',
                'question_id' => '6',
                'c_status' => 'start',
            ],
            [
                'choice' => ' ยอมรับความเเตกต่างส่วนบุคคล',
                'point' => '1',
                'question_id' => '6',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ให้อภัยเเละให้โอกาสเเก้ไข',
                'point' => '1',
                'question_id' => '6',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ยอมรับโดยไม่มีเงื่อนไข',
                'point' => '1',
                'question_id' => '6',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ให้กำลังใจ',
                'point' => '1',
                'question_id' => '6',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีการสื่อสารใดๆ',
                'point' => '0',
                'question_id' => '7',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีการรับรู้ความรู้สึก',
                'point' => '1',
                'question_id' => '7',
                'c_status' => 'start',
            ],
            [
                'choice' => 'พูดคุย/เเสดงความรู้สึกและความต้องการได้อย่าง เปิดเผย',
                'point' => '1',
                'question_id' => '7',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีอิศระในการเเสดงความคิดเห็น',
                'point' => '1',
                'question_id' => '7',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีสัมผัส โอบกอดระหว่างสมาชิก',
                'point' => '1',
                'question_id' => '7',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีการซื่อสารเพื่อลดการขัดเเย้ง',
                'point' => '1',
                'question_id' => '7',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีการทำหน้าที่ตามทบบาท',
                'point' => '0',
                'question_id' => '8',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ตระหนักรู้ มีความชัดเจนให้บทบาทของตน',
                'point' => '1',
                'question_id' => '8',
                'c_status' => 'start',
            ],
            [
                'choice' => 'การเเบ่งเบาภาระ',
                'point' => '1',
                'question_id' => '8',
                'c_status' => 'start',
            ],
            [
                'choice' => ' มีส่วนร่วมในกิจกรรมของครอบครัว',
                'point' => '1',
                'question_id' => '8',
                'c_status' => 'start',
            ],
            [
                'choice' => 'การมอบหมายหน้าที่ในครอบครัว',
                'point' => '1',
                'question_id' => '8',
                'c_status' => 'start',
            ],
            [
                'choice' => 'รับผิดชอบต่มบทบาท หน้าที่',
                'point' => '1',
                'question_id' => '8',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีความรู้ความเข้าใจในการดูเเล',
                'point' => '0',
                'question_id' => '9',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีความรู้ ความเข้าใจเรื่องโรคที่ผู้ป่วยเป็น',
                'point' => '1',
                'question_id' => '9',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีความรู้ ความเข้าใจในการดูเเลผู้ป่วย',
                'point' => '1',
                'question_id' => '9',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีความสามารถในการดูเเลผู้ป่วย',
                'point' => '1',
                'question_id' => '9',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีความสามารถในการสังเกตอาการเปลี่ยนเเปลง อาการกำเริบของผู้ป่วยได้',
                'point' => '1',
                'question_id' => '9',
                'c_status' => 'start',
            ],
            [
                'choice' => 'มีความเข้าใจในสภาพจิตใจของผู้ป่วย',
                'point' => '1',
                'question_id' => '9',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ไม่มีเครือข่าย',
                'point' => '0',
                'question_id' => '10',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ญาติ (ที่ไม่ได้อยู่ในครอบครัว)',
                'point' => '1',
                'question_id' => '10',
                'c_status' => 'start',
            ],
            [
                'choice' => 'เพื่อนบ้าน',
                'point' => '1',
                'question_id' => '10',
                'c_status' => 'start',
            ],
            [
                'choice' => 'ผู้นำชุมชน / อาสาสมัครในชุมชน',
                'point' => '1',
                'question_id' => '10',
                'c_status' => 'start',
            ],
            [
                'choice' => 'หน่วยงานภาครัฐ / เอกชน',
                'point' => '1',
                'question_id' => '10',
                'c_status' => 'start',
            ],
        ]);
    }
}
