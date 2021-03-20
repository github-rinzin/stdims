<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\Result78Import;
use Maatwebsite\Excel\Facades\Excel;

class ResultController extends Controller
{
    public function index() {
        return view('result.teacher.index');
    }
    public function store(Request $request) {
        if($request->hasFile('file')){
            $grade = Auth::user()->teacher->classDivision->grade->numeric;
            if( $grade <= 12 && $grade >= 11) {
                Excel::import(new Result112Import, $request->file);
                return redirect()->back()->with('msg','Result Added!');
            }  
            else if( $grade >= 9) {
                Excel::import(new Result910Import, $request->file);
                return redirect()->back()->with('msg','Result Added!');
            }  
            else if($grade >= 7) {
                Excel::import(new Result78Import, $request->file);
                return redirect()->back()->with('msg','Result Added!');
            }
        }
        abort(400);
    }
}
