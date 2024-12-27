<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialInformations extends Model
{
    //
    use HasFactory;
    protected $table = 'social_informations';
    protected $fillable = [
        'social_information',
        'conditions_of_problems_found',
        'help_planning',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
