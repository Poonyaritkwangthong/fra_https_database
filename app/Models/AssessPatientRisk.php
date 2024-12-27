<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessPatientRisk extends Model
{
    //
    use HasFactory;
    protected $table = 'assess_patient_risk';
    protected $fillable = [
        'risk',
        'risk_detail',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
