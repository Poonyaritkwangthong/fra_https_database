<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    //
    use HasFactory;
    protected $table = 'risk';
    protected $fillable = ['risk_name'];
}
