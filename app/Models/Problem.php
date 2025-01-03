<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    //
    use HasFactory;
    protected $table = 'problem';
    protected $fillable = [
        'problem_detail',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
