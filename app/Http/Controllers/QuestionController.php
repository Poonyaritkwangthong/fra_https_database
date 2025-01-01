<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // แสดงรายการคำถามทั้งหมด
    public function index(Request $request)
    {
        $entries = $request->input('entries', 10);
        $query = $request->input('query');
        $questions = Questions::when($query, function ($q) use ($query) {
            $q->where('id', 'like', '%' . $query . '%')
            ->orWhere('question', 'like', '%' . $query . '%')
            ->orWhere('q_type', 'like', '%' . $query . '%')
            ->orWhere('q_status', 'like', '%' . $query . '%');
        })->paginate($entries);
        return view('/admin/question.index', compact('questions', 'entries', 'query'));
    }

    // แสดงฟอร์มสร้างคำถามใหม่
    public function create()
    {
        return view('/admin/question.create');
    }

    // บันทึกคำถามใหม่ลงฐานข้อมูล
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'q_type' => 'required',
            'q_status' => 'required',
        ]);

        Questions::create($request->only('question', 'q_type', 'q_status'));

        return redirect()->route('question.index')->with('success', 'เพิ่มคำถามสำเร็จ');
    }

    public function show(Questions $question)
{
    return view('question.show', compact('question'));
}

public function edit($id)
{
    $question = Questions::findOrFail($id); // ดึงโมเดลตาม id
    return view('admin.question.edit', compact('question'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'question' => 'required',
        'q_type' => 'required|in:radio,checkbox',
        'q_status' => 'required|in:start,stop',
    ]);

    $question = Questions::findOrFail($id); // ดึงโมเดลตาม id
    $question->update($request->only(['question', 'q_type', 'q_status']));

    return redirect()->route('question.index')->with('success', 'แก้ไขคำถามสำเร็จ');
}
}
