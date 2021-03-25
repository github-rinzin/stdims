<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\Student;


class AdminController extends Controller
{
    public function detail() {
        $teachers = Teacher::paginate(10, '*', 'page_teacher');
        $students = Student::where('class_division_id', null)->paginate(10, '*', 'page_student');
        return view('detail.admin.index_class')
            ->with('teachers', $teachers)
            ->with('students', $students)
            ->with('i',1);
    }
    public function attendance() {
        $teachers = Teacher::paginate(10);
        return view('attendance.admin.index_class')->with('teachers', $teachers)->with('i',1);
    }
    public function statement() {
        $teachers = Teacher::paginate(10);
        return view('statement.admin.index_class')->with('teachers', $teachers)->with('i',1);
    }
    public function result() {
        $teachers = Teacher::paginate(10);
        return view('result.admin.index_class')->with('teachers', $teachers)->with('i',1);
    }
}
