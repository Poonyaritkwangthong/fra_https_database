<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformantChoices extends Model
{
    //
    use HasFactory;
    protected $table = 'informant_choices';
    protected $fillable = [
        'informant_id',
        'question_id',
        'choice_id',
        'score',
    ];


    public function informant () {
        return $this->belongsTo(Informants::class,'informant_id');
    }
    public function question () {
        return $this->belongsTo(Questions::class,'question_id');
    }
    public function choice () {
        return $this->belongsTo(Choices::class,'choice_id');
    }
}
