<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'question' => 'ระดับรายได้ของครอบครัว',
                'q_type' => 'radio',
                'q_status' => 'start',
            ],
            [
                'question' => 'สภาพแวดล้อมภายในบ้าน (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'ความรักใคร่ผูกพันในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'ความสามารถในการเเก้ไขปัญหาของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'ความสามารถของสมาชิกในครอบครัวต่อการจัดการพฤติกรรมที่ไม่เหมาะสมของผู้ป่วย (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'การยอมรับเเละให้อภัยของสมาชิกในครอบครัวเมื่อผู่ป่วยทำผิดหรือมีพฤติกรรมไม่เหมาะสม (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'การสื่อสารระหว่างกันของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'การตระหนักเเละสามารถทำหน้าที่ตามบทบาทของตนอย่างเหมาะสมของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'ความรู้ ความเข้าใจของสมาชิกในครอบครัวต่อการดูเเลผู้ป่วย (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
            [
                'question' => 'การมีเครือข่ายทางสังคมในสมาชิกครอบครัว เพื่อขอรับการช่วยเหลือ (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน',
                'q_type' => 'checkbox',
                'q_status' => 'start',
            ],
        ]);
    }
}
