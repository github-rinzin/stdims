<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Teacher;
use App\Student;
use App\User;
use App\Grade;
use App\Division;
use App\ClassDivision;

class TeacherController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
    {
        $teachers = Teacher::paginate(10);
        return view('teacher.index')->with('teachers', $teachers)->with('i', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classDivisions = ClassDivision::all();
        return view('teacher.create')->with('classDivisions', $classDivisions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'username' => 'required|between:2,25',
            'email' => 'required|email',
            'password' => 'required',
            'class_division_id' => 'required|numeric',
            'name' => 'required|between:2,25',
        ]);
        
        $user = new User;
        $teacher = new Teacher;

        $user->id = $request->id;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;

        $class_division_id  =$request->class_division_id;

        $teacher->user_id = $request->id;
        $teacher->class_division_id = $class_division_id;
        $teacher->name = $request->name;

        $user->save();
        $teacher->save();

        return redirect()->route('teacher.index')->with('msg', 'Class Teacher account created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $user = User::findOrFail($teacher->user->id);
        $teacher->delete();
        $user->delete();
        return redirect()->route('teacher.index')->with('msg', 'Class Teacher deleted successfully');
    }
}
