<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelStudent extends Model
{
    use HasFactory;

    protected $fillable = ['matric_no', 'student_id'];

}
