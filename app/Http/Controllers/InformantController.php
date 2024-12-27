<?php

namespace App\Http\Controllers;

use App\Models\Informants;
use Illuminate\Http\Request;


class InformantController extends Controller
{
    // สำหรับแสดงรายการทั้งหมด
    public function index(Request $request)
    {
        $entries = $request->input('entries', 10);
        $query = $request->input('query');

        $informants = Informants::when($query, function ($q) use ($query) {
            $q->where('id', 'like', '%' . $query . '%')
            ->orWhere('informant_name', 'like', '%' . $query . '%')
            ->orWhere('patient_name', 'like', '%' . $query . '%');
        })->paginate($entries);
        return view('admin.informant.index', compact('informants', 'entries', 'query'));
    }

    // สำหรับแสดงข้อมูลแต่ละตัว
    public function show(Informants $informant)
    {
        return view('informant.show', compact('informant'));
    }
}
