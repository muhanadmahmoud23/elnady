<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'code',
        'date_of_birth',
        'email',
        'level',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_course');
    }

    public function student_course()
    {
        return $this->hasMany(StudentCourse::class);
    }

}
