<?php

namespace App\Http\Controllers;

use App\Models\GradeItem;
use App\Models\Level;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    public function score()
    {
        $result['scores'] = StudentCourse::with('score','student','course')->get();
        $result['grade_items'] = GradeItem::all();
        
        return $result;
    }
}
