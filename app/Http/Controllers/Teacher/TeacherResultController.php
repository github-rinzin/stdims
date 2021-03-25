<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherResultController extends Controller
{
    public function create()
    {
        return view('result.teacher.create');
    }
}
