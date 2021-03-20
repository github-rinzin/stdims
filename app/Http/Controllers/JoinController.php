<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Division;
use App\ClassDivision;
use App\JoinRequest;
use App\Student;
use App\Attendance;

class JoinController extends Controller
{
    public function index(Request $request) {
        $join_reqs = JoinRequest::where('class_division_id', $request->user()->teacher->class_division_id)->paginate(10);
        return view('class.teacher.index')->with('join_reqs', $join_reqs);
    }
    //  this action is for handling the approve actio for teacher
    public function approve(Request $request) {
        $student = Student::findOrFail($request->student_id);
        $student->class_division_id = $request->class_id;
        $student->save();
        $join_req = JoinRequest::findOrFail($request->request_id);
        $attendance = Attendance::where('student_id', $student->id)->update([
            'teacher_id' => $request->user()->teacher->id,
        ]);
        $join_req->delete();
        return redirect()->back()->with('msg', 'Approved! '.$student->name);
    }
    // reject
    public function destroy($id) {
        $join_req = JoinRequest::findOrFail($id);
        $join_req->delete();
        return redirect()->back()->with('msg', 'Deleted ! ');
    }
    public function create(){
       $class = ClassDivision::all();
        return view('class.student.create')->with('class', $class);
    }
    // this action handles the join request sent by student
    public function store(Request $request) {
        if($request->user()->student->class_division_id != null){
            if( JoinRequest::where('student_id', $request->user()->student->id)->where('class_division_id', $request->class_division_id )->first()){
                return redirect()->back()->with('msg', 'Please wait before sending another request');
            }
            else if ($request->class_division_id == 'empty'){
                return redirect()->back()->with('msg', 'Please select a valid class division');
            }
            else if ($request->class_division_id == $request->user()->student->classDivision->id) {
                return redirect()->back()->with('msg', 'Alreday in this class');
            }
        }   
        else {
            $join_req = new JoinRequest;
            $join_req->class_division_id = $request->class_division_id;
            $join_req->student_id = $request->user()->student->id;
            $join_req->save();
            return redirect()->back()->with('msg', 'Request sent successfully');
        }
    }
}
