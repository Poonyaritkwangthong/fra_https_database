<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterTable extends Model
{
    //
    use HasFactory;
    protected $table = 'center_table';
    protected $fillable = [
        'general_information_id',
        'finding_facts_id',
        'social_informations_id',
        'problem_id',
        'assess_patient_risk_id',
        'social_support_id',
        'monitor_and_evaluate_id',
        'termination_of_service_id',
        'family_assessments_id',
        'family_tree_and_house_mep_id',
    ];

    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
    public function finding_facts()
    {
        return $this->belongsTo(FindingFacts::class, 'finding_facts_id');
    }
    public function social_informations()
    {
        return $this->belongsTo(SocialInformations::class, 'social_informations_id');
    }
    public function problem()
    {
        return $this->belongsTo(Problem::class, 'problem_id');
    }
    public function assess_patient_risk()
    {
        return $this->belongsTo(AssessPatientRisk::class, 'assess_patient_risk_id');
    }
    public function social_support()
    {
        return $this->belongsTo(SocialSupport::class, 'social_support_id');
    }
    public function monitor_and_evaluate()
    {
        return $this->belongsTo(MonitorAndEvaluate::class, 'monitor_and_evaluate_id');
    }
    public function family_assessments()
    {
        return $this->belongsTo(FamilyAssessments::class, 'family_assessments_id');
    }
    public function family_tree_and_house_map()
    {
        return $this->belongsTo(FamilyTreeAndHouseMap::class, 'family_tree_and_house_map_id');
    }
}
