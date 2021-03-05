<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is('admin')) {

            # code...
            
            return view('detail.admin.index');

        } else if (auth()->user()->is('teacher')) {

            # code...
            $students = Student::where('class_division_id', auth()->user()->teacher->class_division_id)->paginate(10);
            return view('detail.teacher.index')->with('students', $students);

        } else if (auth()->user()->is('student')) {

            # code...
            return redirect()->route('student.show', auth()->user()->student->id);
        }
        abort(403);
        
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
        //
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
        // return dd($student);
        // $student = User::findOrFail( Auth::user()->id )->student;
        
        

        if(auth()->user()->is('admin')) {

            # code...
            return view('detail.admin.show')->with('student', $student);

        } else if (auth()->user()->is('teacher')) {

            # code...
            return view('detail.teacher.show')->with('student',$student);
           
        } else if (auth()->user()->is('student')) {

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
        if(auth()->user()->is('admin')) {

            # code...
            return view('detail.admin.edit')->with('student', $student);

        } else if (auth()->user()->is('teacher')) {

            # code...
           
           
        } else if (auth()->user()->is('student')) {

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
        $student->name = $request->name;
        $student->save();
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
        //
    }
}
