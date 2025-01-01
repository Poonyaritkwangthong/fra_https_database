<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyAssessments extends Model
{
    //
    use HasFactory;
    protected $table = 'family_assessments';
    protected $fillable = [
        'result',
        'total_score',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
