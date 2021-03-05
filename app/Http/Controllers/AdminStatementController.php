<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\Statement;

class AdminStatementController extends Controller
{
    public function index($id) {
        $statements = Statement::where('student_id', $id)->get();
        $student = Student::findOrFail($id);
        return view('statement.admin.index')->with('statements', $statements)->with('student', $student)->with('i',1);
    }
    public function class($id) {
        $teacher = Teacher::findOrFail($id);
        $class_division_id = $teacher->classDivision->id;
        $students = Student::where('class_division_id', $class_division_id)->paginate(10);
        return view('statement.admin.index_class')->with('students', $students)->with('i', 1);
    }
    public function student($class_division_id) {
        $students = Student::where('class_division_id', $class_division_id)->paginate(10);
        return view('statement.admin.index_student')->with('students', $students)->with('i', 1);
    }
}

