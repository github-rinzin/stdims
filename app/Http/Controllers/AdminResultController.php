<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;

class AdminResultController extends Controller
{
    public function class($id) {
        $teacher = Teacher::findOrFail($id);
        $class_division_id = $teacher->classDivision->id;
        $students = Student::where('class_division_id', $class_division_id)->paginate(10);
        return view('result.admin.index_student')->with('students', $students)->with('teacher', $teacher)->with('i', 1);
    }

}
