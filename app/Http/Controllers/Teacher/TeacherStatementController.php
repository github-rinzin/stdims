<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Student;
use App\Statement;
use App\Http\Controllers\Controller;

class TeacherStatementController extends Controller
{
    public function index($id) {
        $statements = Statement::where('student_id', $id)->paginate(10);
        return view('statement.teacher.index')->with('statements', $statements)->with('i', 1);
    }
    public function student(Request $request) {
        $id = $request->user()->teacher->class_division_id;
        $students = Student::where('class_division_id', $id)->paginate(10);
        return view('statement.teacher.student_index')->with('students', $students)->with('i', 1);
    }
}
