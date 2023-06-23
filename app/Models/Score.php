<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public function student_course(){
        return $this->belongsTo(StudentCourse::class, 'student_course_id');
    }
}
