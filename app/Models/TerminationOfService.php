<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminationOfService extends Model
{
    //
    use HasFactory;
    protected $table = 'termination_of_service';
    protected $fillable = [
        'cause',
        'cause_detail',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
