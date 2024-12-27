<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informants;

class FormTestController extends Controller
{
    public function index()
    {
        $informants = Informants::all();
        return view('page.form_informant', ['informants' => $informants]);
    }
    // แสดงฟอร์มสร้างคำถามใหม่
    public function create()
    {
        return view('page.form_informant');
    }

    // บันทึกคำถามใหม่ลงฐานข้อมูล
    public function store(Request $request)
    {
        $request->validate([
            'informant_name' => 'required',
            'informant_age' => 'required',
            'related' => 'required',
            'patient_name' => 'required',
            'HN' => 'required',
            'patient_age' => 'required',
        ]);
        Informants::create($request->all());

        return redirect()->route('form_01')->with('success', 'เพิ่มข้อมูลผู้ให้ข้อมูลสำเร็จ');
    }


     // แสดงฟอร์มหน้าแรก
     public function showForm1()
     {
         $selectedIncome = session('selected_income');
         return view('page/form_01', compact('selectedIncome'));
     }
     // ประมวลผลฟอร์มและเก็บข้อมูลใน Session
     public function processForm1(Request $request)
     {
         $request->validate([
             'income' => 'required', // ตรวจสอบว่ามีการเลือกตัวเลือก
         ]);
         // เก็บข้อมูลใน Session
         session(['selected_income' => $request->input('income')]);
         // เปลี่ยนเส้นทางไปหน้าถัดไป
         return redirect()->route('form_02');
     }
     // แสดงหน้าถัดไป
     public function showNextStep2()
     {
         $income = session('selected_income'); // ดึงข้อมูลจาก Session
         return view('page/form_02', compact('income'));
     }
}
