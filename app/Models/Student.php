<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'identity', 'gender', 'citizen_type'];

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

    public function scopeFilter($query, $filter)
    {

        # Search Gender
        if($filter->gender){
            $query->where('gender', $filter->gender);
        }

        # Search Citizen type
        if($filter->citizen_type){
            $query->where('citizen_type', $filter->citizen_type);
        }

        # Search Matrik No
        if($filter->keyword){
            $query->where(function ($query) use ($filter){
                $query->whereHas('levelStudent', function ($query) use ($filter){
                    $query->where('matric_no', 'like', "%{$filter->keyword}%");
                })
                    ->orWhere('full_name', 'like', "%{$filter->keyword}%")
                    ->orWhere('identity', 'like', "%{$filter->keyword}%");
            });

        }
//        $query->when($filter->matric_no ?? false, function ($query, $search){
//           $query->whereHas('levelStudent', function ($query) use ($search){
//               $query->where('matric_no', 'like', "%{$search}%");
//           });
//        });

        return $query;
    }

}
