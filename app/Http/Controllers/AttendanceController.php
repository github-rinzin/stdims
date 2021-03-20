<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Attendance;
use App\Student;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Gate::allows('is-student')){
            $attendances = Attendance::where('student_id',$request->user()->student->id)->whereYear('created_at', date('Y'))->paginate(30);
            return view('attendance.student.index')->with('attendances', $attendances)->with('i',1); 
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Gate::authorize('is-teacher');
        $id = $request->user()->teacher->class_division_id;
        $students = Student::where('class_division_id',$id)->get();
        return view('attendance.teacher.create')->with('students', $students)->with('i',1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('is-teacher');
        for($i = 0; $i < count($request->student_id); $i++) {
            $attendance = new Attendance;
            $attendance->student_id = $request->student_id[$i];
            $attendance->teacher_id = $request->user()->teacher->id;
            $attendance->date = $request->date;
            $attendance->status = $request->status[$i];
            $attendance->save();
        }   
        return redirect()->route('teacher.attendance.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {  
        if(Gate::allows('is-teacher') && $request->user()->teacher->classDivision->id  == $attendance->student->class_division_id) {
            $attendance->status = $request->status ? 'true' : 'false';
            $attendance->update();
            
        }else if(Gate::allows('is-admin')) {
            $attendance->status = $request->status ? 'true' : 'false';
            $attendance->update();
        }
        return redirect()->back()->with('msg', 'Update !');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
