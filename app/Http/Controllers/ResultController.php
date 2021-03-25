<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\Result78Import;
use App\Imports\Result910Import;
use App\Imports\ResultArtsImport;
use App\Imports\ResultCommerceImport;
use App\Imports\ResultScienceImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Result_11_12sci;
use App\Result_11_12com;
use App\Result_11_12arts;
use App\Result_9_10;


class ResultController extends Controller
{
    public function filter($collection){
        return $collection[0]->filter(function($item){
            if($item['student_code'] != null){
                return $item;
            }
        });
    }
    public function index() {
        $class_division_id = auth()->user()->teacher->id;
        $grade = auth()->user()->teacher->classDivision->grade->numeric;
        $results;
        if( $grade <= 12 && $grade >= 11) {
            $stream_id = auth()->user()->teacher->classDivision->stream->id;
            if($stream_id == 1){
                $results = Result_11_12sci::where('class_division_id', $class_division_id)->get();
            }else if($stream_id == 2){
                $results = Result_11_12com::where('class_division_id', $class_division_id)->get();
            }else if($stream_id == 3){
                $results = Result_11_12arts::where('class_division_id', $class_division_id)->get();
            }    
        }  
        else if( $grade >= 9) {
            $results = Result_9_10::where('class_division_id', $class_division_id)->get();
        }  
        else if($grade >= 7) {
            $results = Result_7_8::where('class_division_id', $class_division_id)->get();
        }
        return view('result.teacher.index')->with('results', $results);
    }
    public function store(Request $request) {
        if($request->hasFile('file')){
            $class_division_id = $request->user()->teacher->id;
            $grade = $request->user()->teacher->classDivision->grade->numeric;
            $flag = false;
            if( $grade <= 12 && $grade >= 11) {
                $stream_id = $request->user()->teacher->classDivision->stream->id;
                if($stream_id == 1){
                    $collection = (new ResultScienceImport)->toCollection($request->file);
                    $collection = $this->filter($collection);
                    foreach($collection as $item) {
                        Result_11_12sci::create([
                            'student_id'        => $item['student_code'],
                            'english'           => $item['english'],
                            'dzongkha'          => $item['dzongkha'],
                            'maths'	            => $item['maths'],
                            'biology'           => $item['biology'],
                            'physics'           => $item['physics'],
                            'chemistry'         => $item['chemistry'],
                            'class_division_id' => $class_division_id,
                        ]);
                    }
                    $flag = true;
                }else if($stream_id == 2){
                    $collection = (new ResultCommerceImport)->toCollection($request->file);
                    $collection = $this->filter($collection);
                    foreach($collection as $item) {
                        Result_11_12com::create([
                            'student_id'    => $item['student_code'],
                            'english'       => $item['english'],
                            'dzongkha'      => $item['dzongkha'],
                            'bmaths'	    => $item['bmaths'],
                            'commerce'      => $item['commerce'],
                            'accounts'      => $item['accounts'],
                            'eco_it'	    => $item['eco_it'],
                            'class_division_id' => $class_division_id,
                        ]);
                    }
                    $flag = true;
                }else if($stream_id == 3){
                    $collection = (new ResultArtsImport)->toCollection($request->file);
                    $collection = $this->filter($collection);
                    foreach($collection as $item) {
                        Result_11_12arts::create([
                            'student_id'        => $item['student_code'],
                            'english'           => $item['english'],
                            'dzongkha'          => $item['dzongkha'],
                            'bmaths'	        => $item['bmaths'],
                            'history'	        => $item['history'],
                            'geography'	        => $item['geography'],
                            'eco_it'            => $item['eco_it'],
                            'media'             => $item['media'],
                            'rigzhung'          => $item['rigzhung'],
                            'class_division_id' => $class_division_id,
                        ]);                 
                    }
                    $flag = true;
                }
            }else if( $grade >= 9) {
                $collection = (new Result910Import)->toCollection($request->file);
                $collection = $this->filter($collection);
                foreach($collection as $item) {
                    Result_9_10::create([
                        'student_id'    => $item['student_code'],
                        'english'       => $item['english'],
                        'dzongkha'      => $item['dzongkha'],
                        'maths'	        => $item['maths'],
                        'history'	    => $item['history'],
                        'geography'	    => $item['geography'],
                        'biology'       => $item['biology'],
                        'physics'       => $item['physics'],
                        'chemistry'     => $item['chemistry'],
                        'ict'           => $item['ict'],
                        'eco_it'        => $item['eco_it'],
                        'class_division_id' => $class_division_id,
                    ]);
                }
                $flag = true;
            } else if($grade >= 7) {
                $collection = (new Result78Import)->toCollection($request->file);
                $collection = $this->filter($collection);
                foreach($collection as $item) {
                    Result_7_8::create([
                        'student_id'    => $item['student_code'],
                        'english'       => $item['english'],
                        'dzongkha'      => $item['dzongkha'],
                        'maths'	        => $item['maths'],
                        'history'	    => $item['history'],
                        'geography'	    => $item['geography'],
                        'science'	    => $item['science'],
                        'class_division_id' => $class_division_id,
                    ]);
                }
                $flag = true;
            }
        } else {
            return redirect()->back()->with('msg','Select a file!');
        }
        if( $flag ) {
            return redirect()->back()->with('msg','Result Added!');
        } else {
            return redirect()->back()->with('msg','Someting went wrong!');
        }
    }
    public function create() {
        return view('result.teacher.create');
    }
}