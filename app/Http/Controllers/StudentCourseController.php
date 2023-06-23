<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentCourseController extends Controller
{
    public function index()
    {
        DB::statement("SET SQL_MODE=''");

        return DB::table('student_courses')
            ->select(DB::raw('count("student_course") as count'), 'courses.code', 'name', 'courses.id')
            ->join('students', 'students.id', '=', 'student_courses.student_id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->groupBy('student_courses.course_id')
            ->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'student' => 'required',
            'id' => 'required',
        ]);

        
        return StudentCourse::create([
            'student_id' => $request->student,
            'course_id' => $request->id
        ]);
    }

    public function show($id)
    {
        $data['course'] = Course::find($id);
        $data['students'] = Student::all();

        return $data;
    }

    public function getCourseStudents($id)
    {
        return Course::with('students')->find($id);
    }

    public function deleteCourseStudents($student_id, $course_id)
    {
        return StudentCourse::where('student_id', $student_id)
            ->where('course_id', $course_id)
            ->delete();
    }
}
