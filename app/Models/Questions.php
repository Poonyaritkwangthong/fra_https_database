<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'question',
        'q_type',
        'q_status',
    ];

    public function choice() {
        return $this->hasMany(Choices::class,'question_id');
    }
}
