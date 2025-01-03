<?php

namespace App\Http\Controllers;

use App\Models\Choices;
use App\Models\Informants;
use App\Models\InformantChoices;
use App\Models\Questions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EvaluationFormController extends Controller
{
    //
    public function index()
    {
        $choices = Choices::with('question')->get();

        // จัดกลุ่ม Choices ตาม question.id
        $groupedChoices = $choices->groupBy(function ($item) {
            return $item->question->id;  // ใช้ question.id เป็น key ในการจัดกลุ่ม
        });

        return view('page.evaluation_form', ['groupedChoices' => $groupedChoices]);
    }

    public function create()
    {
        $questions = Questions::all();
        return view('page.evaluation_form', compact('questions'));
    }

    public function store(Request $request)
    {
        // ตรวจสอบข้อมูล
        $validator = Validator::make($request->all(), [
            'informant_name' => 'required|string|max:255',
            'informant_age' => 'required|integer|min:0',
            'related' => 'required|string|max:255',
            'patient_name' => 'required|string|max:255',
            'HN' => 'required|digits:7',
            'patient_age' => 'required|integer|min:0',
            'scores' => 'required|array|min:1',
            'scores.*.question_id' => 'required|integer|exists:questions,id',
            'scores.*.choice_id' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (is_array($value)) {
                        foreach ($value as $choice) {
                            if (!is_numeric($choice)) {
                                $fail("The $attribute must contain only integers.");
                            }
                        }
                    } elseif (!is_numeric($value)) {
                        $fail("The $attribute must be an integer.");
                    }
                },
            ]
        ],[
            'HN.required' => 'กรุณากรอกรหัสผู้ป่วย',
            'HN.digits' => 'รหัสผู้ป่วยต้องเป็นตัวเลข 7 หลักเท่านั้น',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $informant = Informants::create($request->only([
                'informant_name',
                'informant_age',
                'related',
                'patient_name',
                'HN',
                'patient_age',
            ]));

            $totalScore = 0;

            foreach ($request->scores as $scoreData) {
                $choiceId = $scoreData['choice_id'];
                if (is_array($choiceId)) {
                    $encodedChoiceId = json_encode($choiceId);
                    $score = array_sum($choiceId);
                    $totalScore += $score;
                } else {
                    $encodedChoiceId = (int) $choiceId;
                    $score = (int) $choiceId;
                    $totalScore += $score;
                }

                InformantChoices::create([
                    'informant_id' => $informant->id,
                    'question_id' => $scoreData['question_id'],
                    'choice_id' => $encodedChoiceId,
                    'score' => $score,
                ]);
            }

            $informant->update(['total_score' => $totalScore]);

            return view('page.form_result', [
                'informant' => $informant,
                'totalScore' => $request->total_score,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while saving data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
