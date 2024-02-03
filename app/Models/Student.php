<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function levelStudent()
    {
        return $this->belongsTo(LevelStudent::class, 'id', 'student_id');
    }

    public function lookupCitizen()
    {
        return $this->belongsTo(GeneralLookup::class, 'citizen_type', 'code');
    }

    public function lookupGender()
    {
        return $this->belongsTo(GeneralLookup::class, 'gender', 'code');
    }

}
