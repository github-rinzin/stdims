<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;
use App\Result_11_12sci;
use App\Result_11_12com;
use App\Result_11_12arts;
use App\Result_9_10;

class AdminResultController extends Controller
{
    public function class($id) {
        $teacher = Teacher::findOrFail($id);
        $class_division_id = $teacher->classDivision->id;
        $students = Student::where('class_division_id', $class_division_id)->paginate(10);
        return view('result.admin.index_student')->with('students', $students)->with('teacher', $teacher)->with('i', 1);
    }
    public function show($id){
        $student = Student::findOrFail($id);
        $student_id = $student->id;
        $grade = $student->classDivision->grade->numeric;
        $results;
        if( $grade <= 12 && $grade >= 11) {
            $stream_id = $student->classDivision->stream->id;
            if($stream_id == 1){
                $results = Result_11_12sci::where('student_id', $student_id)->get();
            }else if($stream_id == 2){
                $results = Result_11_12com::where('student_id', $student_id)->get();
            }else if($stream_id == 3){
                $results = Result_11_12arts::where('student_id', $student_id)->get();
            }    
        }  
        else if( $grade >= 9) {
            $results = Result_9_10::where('student_id', $student_id)->get();
        }  
        else if($grade >= 7) {
            $results = Result_7_8::where('student_id', $student_id)->get();
        }
        return view('result.admin.show')->with('results',$results)->with('student', $student);
    }
}
