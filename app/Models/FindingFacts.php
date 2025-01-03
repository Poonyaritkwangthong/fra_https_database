<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindingFacts extends Model
{
    //
    use HasFactory;
    protected $table = 'finding_facts';
    protected $fillable = [
        'receive',
        'receive_detail',
        'admit_date',
        'facts_target_group',
        'facts_target_group_detail',
        'medical_expenses',
        'can_pay',
        'helping_pay',
        'informant',
        'other_name',
        'relation',
        'address_informant',
        'informant_phone_num',
        'income',
        'source_of_income',
        'source_of_income_detail',
        'having_debt',
        'total_debt',
        'source_of_debt',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
