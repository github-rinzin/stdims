<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Teacher;
use App\Student;
use App\Attendance;
use Carbon\Carbon;
class AdminAttendanceController extends Controller
{
    public function class($id) {
        $teacher = Teacher::findOrFail($id);
        $class_division_id = $teacher->classDivision->id;
        $students = Student::where('class_division_id', $class_division_id)->paginate(10);
        return view('attendance.admin.index_student')->with('teacher', $teacher)->with('students', $students)->with('i', 1);
    }
    public function student($student_id)
    {
        $attendances = Attendance::where('student_id', $student_id)
            ->whereBetween('created_at', [
                Carbon::now()->startOfYear(),
                Carbon::now()->endOfYear(),
            ])
            ->paginate(30);  
        return view('attendance.admin.show')->with('attendances', $attendances)->with('i', 1);    
    }
}
