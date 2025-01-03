<?php

namespace App\Http\Controllers;

use App\Models\Choices;
use App\Models\Questions;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    // แสดงรายการคำถามทั้งหมด
    public function index(Request $request)
    {
        // รับค่าจาก request และตั้งค่า default เป็น 10 ถ้าไม่มีค่า
        $entries = $request->input('entries', 10);
        $query = $request->input('query');

        // ดึงข้อมูลจาก model โดยใช้คำค้นหาและ pagination
        $choices = Choices::when($query, function ($q) use ($query) {
            $q->where('id', 'like', '%' . $query . '%') // ค้นหาใน id
              ->orWhere('choice', 'like', '%' . $query . '%') // ค้นหาใน choice
              ->orWhere('c_status', 'like', '%' . $query . '%') // ค้นหาใน choice
              ->orWhereHas('question', function ($subQuery) use ($query) {
                  $subQuery->where('question', 'like', '%' . $query . '%'); // ค้นหาในฟิลด์ question ของความสัมพันธ์
              });
        })->paginate($entries);

        return view('admin.choice.index', compact('choices', 'entries', 'query'));
    }

    // แสดงฟอร์มสร้างคำถามใหม่
    public function create()
    {
        $questions = Questions::all();// ดึงคำถามทั้งหมด
        return view('/admin/choice.create', compact('questions'));
    }

    // บันทึกคำถามใหม่ลงฐานข้อมูล
    public function store(Request $request)
    {
        $request->validate([
            'choice' => 'required',
            'point' => 'required',
            'question_id' => 'required',
            'c_status' => 'required',
        ]);

        Choices::create($request->all());

        return redirect()->route('choice.index')->with('success', 'เพิ่มตัวเลือกสำเร็จ');
    }

    public function show(Choices $choice)
    {
        $choice = Choices::with('question')->get();
        return view('choice.show', compact('choice'));
    }

    public function edit($id)
    {
        $choice = Choices::findOrFail($id); // ดึงโมเดลตาม id
        $questions = Questions::all(); // ดึงคำถามสำหรับ dropdown
        return view('admin.choice.edit', compact('choice', 'questions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'choice' => 'required',
            'point' => 'required',
            'question_id' => 'required',
            'c_status' => 'required',
        ]);

        $question = Choices::findOrFail($id); // ดึงโมเดลตาม id
        $question->update($request->all());

        return redirect()->route('choice.index')->with('success', 'แก้ไขตัวเลือกสำเร็จ');
    }
}
