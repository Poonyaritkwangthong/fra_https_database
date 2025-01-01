<?php

namespace App\Http\Controllers;

use App\Models\Informants;
use Illuminate\Http\Request;

class InformantScoresController extends Controller
{
     // สำหรับแสดงรายการทั้งหมดของ Informant Scores (ถ้ามี)
     public function index(Request $request)
     {
        $entries = $request->input('entries', 10);
        $query = $request->input('query');

         $informants = Informants::when($query, function ($q) use ($query) {
            $q->where('id', 'like', '%' . $query . '%')
            ->orWhere('informant_name', 'like', '%' . $query . '%')
            ->orWhere('total_score', 'like', '%' . $query . '%');
        })->paginate($entries);
         return view('admin.informant_scores.index', compact('informants', 'entries', 'query'));
     }

     // สำหรับแสดงรายละเอียดของ Informant Scores (ถ้ามี)
     public function show(Informants $informant)
     {
         return view('informant_scores.show', compact('informant'));
     }
}
