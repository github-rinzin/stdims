<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\User;
use App\ClassDivision;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
     /**
     * Display admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin() {
        Gate::authorize('is-admin');
        $numberOfStudents = Student::count();
        $numberOfTeachers = Teacher::count();
        $numberOfClassDivisions = ClassDivision::count();
        $teachers = Teacher::paginate(5);
        $students = Student::where('class_division_id', '<>' , 'null')->paginate(15);
        return view('dashboard.admin.dashboard')
                ->with([
                    'numberOfStudents' => $numberOfStudents,
                    'numberOfTeachers'=> $numberOfTeachers,
                    'numberOfClassDivisions' =>  $numberOfClassDivisions,
                    'teachers' => $teachers,
                    'students' => $students,
                    'i' => 1,
                    'j' => 1,
                ]);
    }
    /**
     * Display teacher dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacher(Request $request) {
        Gate::authorize('is-teacher');
        $class_division_id = User::findOrFail($request->user()->id)->teacher->class_division_id;
        $students = Student::where('class_division_id',  $class_division_id)->paginate(5);
        return view('dashboard.teacher.dashboard')
            ->with([
                'students'=> $students,
                'i' => 1,
            ]);
    }
    /**
     * Display student dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function student(Request $request) {
        Gate::authorize('is-student');
        return view('dashboard.student.dashboard');
        return redirect()->route('student.show', $request->user()->student->id);
    }
}
