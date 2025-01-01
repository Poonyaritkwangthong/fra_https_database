<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informants extends Model
{
    //
    use HasFactory;
    protected $table = 'informants';
    protected $fillable = [
        'informant_name',
        'informant_age',
        'related',
        'patient_name',
        'HN',
        'patient_age',
        'total_score'
    ];

    public function informant () {
        return $this->belongsTo(Informants::class, 'informant_id');
    }
}
