<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choices extends Model
{
    //
    use HasFactory;
    protected $table = 'choices';
    protected $fillable = [
        'choice',
        'point',
        'question_id',
        'c_status',
    ];
    public function question()
    {
        return $this->belongsTo(Questions::class, 'question_id');
    }
}
