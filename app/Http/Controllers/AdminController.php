<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class AdminController extends Controller
{
    public function detail() {
        $teachers = Teacher::paginate(10);
        return view('detail.admin.index_class')->with('teachers', $teachers)->with('i',1);
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
