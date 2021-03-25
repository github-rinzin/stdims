<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Result_11_12sci;
use App\Result_11_12com;
use App\Result_11_12arts;
use App\Result_9_10;

class ResultController extends Controller
{
    public function index() {
        $class_division_id = auth()->user()->student->id;
        $grade = auth()->user()->student->classDivision->grade->numeric;
        $results;
        if( $grade <= 12 && $grade >= 11) {
            $stream_id = auth()->user()->student->classDivision->stream->id;
            if($stream_id == 1){
                $results = Result_11_12sci::where('student_id', $class_division_id)->get();
            }else if($stream_id == 2){
                $results = Result_11_12com::where('student_id', $class_division_id)->get();
            }else if($stream_id == 3){
                $results = Result_11_12arts::where('student_id', $class_division_id)->get();
            }    
        } 
        else if( $grade >= 9) {
            $results = Result_9_10::where('student_id', $class_division_id)->get();
        }  
        else if($grade >= 7) {
            $results = Result_7_8::where('student_id', $class_division_id)->get();
        }
        return view('result.student.index')->with('results', $results);
    }
}
