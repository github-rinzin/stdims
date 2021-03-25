<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Address;
use App\Student;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Gate::allows('is-admin')) {
            # code...
            return view('detail.admin.index');
        } else if (Gate::allows('is-teacher')) {
            # code...
            $students = Student::where('class_division_id', $request->user()->teacher->class_division_id)->paginate(10);
            return view('detail.teacher.index')->with('students', $students);
        } else if (Gate::allows('is-student')) {
            # code...
            return redirect()->route('student.show', $request->user()->student->id);
        } else {
            abort(403);
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'cid' => 'required',
            'house_number' => 'required',
            'thram_number' => 'required',
            'village' => 'required',
            'gewog' => 'required',
            'dzongkhag' => 'required',
            'name_of_previous_school' => 'required',
            'code' => 'required',
            'fathers_name' => 'required',
            'fathers_contact' => 'required',
            'fathers_address' => 'required',
            'mothers_name' => 'required',
            'mothers_contact' => 'required',
            'mothers_address' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // this section is for student
        if(Gate::allows('is-admin')) {
            # code...
            return view('detail.admin.show')->with('student', $student);

        } else if (Gate::allows('is-teacher')) {
            # code...
            return view('detail.teacher.show')->with('student',$student);
           
        } else if (Gate::allows('is-student')) {
            # code...
            return view('detail.student.show')->with('student',$student);
        }
        abort(403);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        
        if(Gate::allows('is-admin')) {

            # code...
            return view('detail.admin.edit')->with('student', $student);

        } else if (Gate::allows('is-teacher')) {

            # code...
            return view('detail.teacher.edit')->with('student', $student);
           
        } else if (Gate::allows('is-student')) {

            # code...
            return view('detail.student.edit')->with('student', $student);
            
        }
        abort(403);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        $address = Address::where('student_id',$student->id)->first();
        $address->house_number = $request->house_number;
        $address->thram_number = $request->thram_number;
        $address->village = $request->village;
        $address->gewog = $request->gewog;
        $address->dzongkhag = $request->dzongkhag;
        $address->update();
        return redirect()->route('student.edit',$student->id)->with('msg','Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        User::where('id', $student->user->id)->delete();
        return redirect()->back()->with('msg', 'deleted');
    }
}
