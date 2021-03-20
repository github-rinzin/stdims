<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Attendance;
use App\Student;

class TeacherAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = $user->teacher->class_division_id;
        $students = Student::where('class_division_id',$id)->get();
        return view('attendance.teacher.index')->with('students', $students)->with('i',1);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        if($request->user()->teacher->classDivision->id  == $student->class_division_id) {
            
            $attendances = Attendance::where('student_id',$id)->whereYear('created_at', date('Y'))->paginate(20);    
            return view('attendance.teacher.show')->with('attendances', $attendances)->with('i',1);
        }
        abort(403);
    }
}
