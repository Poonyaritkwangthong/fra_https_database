<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInformation extends Model
{
    //
    use HasFactory;
    protected $table = 'general_information';
    protected $fillable = [
        'case_date',
        'hn',
        'an',
        'sn',
        'prefix',
        'full_name',
        'id_card_num',
        'birth_date',
        'age',
        'nationality',
        'ethnicity',
        'education',
        'religion',
        'marital_status',
        'healthcare_rights',
        'occupation',
        'phone_num',
        'current_address',
        'target_group'
    ];

      // ความสัมพันธ์กับ FindingFacts
      public function finding_facts()
      {
          return $this->hasOne(FindingFacts::class, 'general_information_id');
      }

      // ความสัมพันธ์กับ SocialInformation
      public function social_informations()
      {
          return $this->hasOne(SocialInformations::class, 'general_information_id');
      }

      public function problem()
      {
          return $this->hasOne(Problem::class, 'general_information_id');
      }

      public function assess_patient_risk()
      {
          return $this->hasOne(AssessPatientRisk::class, 'general_information_id');
      }

      public function social_support()
      {
          return $this->hasOne(SocialSupport::class, 'general_information_id');
      }

      public function monitor_and_evaluate()
      {
          return $this->hasOne(MonitorAndEvaluate::class, 'general_information_id');
      }

      public function termination_of_service()
      {
          return $this->hasOne(TerminationOfService::class, 'general_information_id');
      }

      public function family_assessments()
      {
          return $this->hasOne(FamilyAssessments::class, 'general_information_id');
      }

      public function family_tree_and_house_map()
      {
          return $this->hasOne(FamilyTreeAndHouseMap::class, 'general_information_id');
      }
}
