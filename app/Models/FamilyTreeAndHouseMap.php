<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyTreeAndHouseMap extends Model
{
    //
    use HasFactory;
    protected $table = 'family_tree_and_house_map';
    protected $fillable = [
        'family_tree',
        'house_map',
        'general_information_id',
    ];
    public function general_information()
    {
        return $this->belongsTo(GeneralInformation::class, 'general_information_id');
    }
}
