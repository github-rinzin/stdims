<?php

namespace App\Http\Controllers;

use App\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('is-student');
        $statements = Statement::where('student_id', Auth::user()->student->id)->paginate(2);
        return view('statement.student.index')->with('statements', $statements)->with('i',1);
    }

    /**
     * Show the form for creating a new statement.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statement.student.create');
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
            'subject' => 'required|between:10,100',
            'content' => 'required|between:10,1000',
        ]);
        $statement = new Statement;
        $statement->subject = $request->subject;
        $statement->content = $request->content;
        $statement->student_id = Auth::user()->student->id;
        $statement->save();
        return redirect()->route('statement.index')->with('msg', 'Submitted Successfully');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function show(Statement $statement)
    {  
        if(Auth::user()->is('teacher')){
            return view('statement.teacher.show')->with('statement', $statement);
        } else if(Auth::user()->is('admin')) {
            return view('statement.admin.show')->with('statement', $statement);
        }
        else if(Auth::user()->is('student')){
            return view('statement.student.show')->with('statement',$statement);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function edit(Statement $statement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statement $statement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statement $statement)
    {
        Gate::authorize('is-admin');
        $statement->delete();
        return redirect()->route('admin.statement.class')->with('msg', 'Deleted Successfully');
    }
}
