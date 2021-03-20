<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\Student;

class AdminStudentController extends Controller
{
    public function class($id) {
        $teacher = Teacher::findOrFail($id);
        $students = Student::where('class_division_id', $teacher->classDivision->id)->paginate(10);
        return view('detail.admin.index')->with('teacher', $teacher)->with('students', $students)->with('i', 1);
    }
}
