<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitorAndEvaluate extends Model
{
    //
    use HasFactory;
    protected $table = 'monitor_and_evaluate';
    protected $fillable = [
        'monitor_and_evaluate_detail',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
