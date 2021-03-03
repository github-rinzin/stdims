<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class AdminController extends Controller
{
    public function detail() {
        $teachers = Teacher::paginate(20);
        return view('detail.admin.index_class')->with('teachers', $teachers)->with('i',1);
    }
    public function attendance() {
        return view('attendance.admin.index_class');
    }
    public function statement() {
        return view('statement.admin.index_class');
    }
}
