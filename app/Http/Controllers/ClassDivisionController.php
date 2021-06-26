<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassDivision;
use App\Grade;
use App\Division;
use App\Stream;

class ClassDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classDivisions = ClassDivision::paginate(10); 
        return view('class.admin.index')
                ->with('classDivisions', $classDivisions )
                ->with('i', 1);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        $divisions = Division::all();
        $streams = Stream::all();
        return view('class.admin.create')
                ->with('grades', $grades)
                ->with('divisions', $divisions)
                ->with('streams', $streams);
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
            'gradeId' => "required",
            'divisionId' => "required",
        ]);
        if($request->gradeId == "empty" || $request->divisionId == "empty") {
            return redirect()->back()->with('msg','Enter valid class and division!');
        }
        $grade = Grade::findOrFail($request->gradeId);
        $division = Division::findOrFail($request->divisionId);
        $oldClassDivision = ClassDivision::where('grade_id', $request->gradeId)->where('division_id', $request->divisionId)->get();
        if( count($oldClassDivision) == 0) {
            $classDivision = new ClassDivision;
            $classDivision->grade_id = $grade->id;
            $classDivision->division_id = $division->id;
            if($request->streamId != 'null' && $grade->numeric >= 11){
                $classDivision->stream_id =  $request->streamId;
            }
            $classDivision->save();
            return redirect()->route('class.index')->with('msg','Class Created !');
        }else {
            return redirect()->route('class.index')->with('msg','Class Already Exist !');  
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ClassDivision  $classDivision
     * @return \Illuminate\Http\Response
     */
    public function show(ClassDivision $classDivision)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassDivision  $classDivision
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassDivision $classDivision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassDivision  $classDivision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassDivision $classDivision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassDivision  $classDivision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ClassDivision $classDivision)
    {
        return 'deleted';
        $class = ClassDivision::findOrFail($request->id);
        $class->delete();
        return redirect()->back();
    }
}
