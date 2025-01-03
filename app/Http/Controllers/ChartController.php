<?php

namespace App\Http\Controllers;

use App\Models\GeneralInformation;
use App\Models\InformantChoices;
use App\Models\Informants;
use DateTime;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function index()
    {
        $total_informant = Informants::count('id'); // นับจำนวนแถวทั้งหมดในตาราง informants
        $monthly_data = GeneralInformation::selectRaw('MONTH(created_at) as month, COUNT(id) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // เติมเดือนที่ไม่มีข้อมูลด้วยค่า 0
        $data = collect(range(1, 12))->map(function ($month) use ($monthly_data) {
            // ค้นหาข้อมูลสำหรับเดือนนั้น
            $item = $monthly_data->firstWhere('month', $month);
            return $item ? $item->total : 0; // ถ้ามีข้อมูลก็ใช้จำนวนคะแนน ถ้าไม่มีใช้ 0
        });

        // ดึงค่าเดือน (1-12) และแปลงเป็นชื่อเดือน
        $months = collect(range(1, 12))->map(function ($month) {
            return DateTime::createFromFormat('!m', $month)->format('F'); // แปลงเป็นชื่อเดือน
        });
        $total_scores = InformantChoices::sum('score'); // ผลรวมของคะแนนทั้งหมด
        $average_scores = $total_informant > 0 ? $total_scores / $total_informant : 0; // คำนวณคะแนนเฉลี่ย โดยป้องกันการหารด้วย 0
        $monthlyScores = [];

        // วนลูปตาม 12 เดือน
        for ($month = 1; $month <= 12; $month++) {
            // คำนวณจำนวน informants ในเดือนนั้น
            $totalInformant = DB::table('informants')
                ->whereMonth('created_at', $month)
                ->count();

            // คำนวณคะแนนรวมในเดือนนั้น
            $totalScores = DB::table('informant_choices')
                ->whereMonth('created_at', $month)
                ->sum('score');

            // คำนวณคะแนนเฉลี่ยในเดือนนั้น
            $averageScore = $totalInformant > 0 ? $totalScores / $totalInformant : 0;

            // เพิ่มข้อมูลเข้าอาร์เรย์
            $monthlyScores[] = [
                'month' => Carbon::create()->month($month)->format('F'), // แปลงเลขเดือนเป็นชื่อ
                'average_score' => $averageScore,
                'total_informants' => $totalInformant, // เพิ่มจำนวน informants
            ];
        }
        return view('admin.index', compact('total_informant', 'total_scores', 'average_scores', 'months', 'data', 'monthlyScores')); // ส่งตัวแปรไปยัง view
    }
}
