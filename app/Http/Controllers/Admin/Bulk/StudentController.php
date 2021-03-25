<?php

namespace App\Http\Controllers\Admin\Bulk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\StudentImport;
use App\Imports\AddressImport;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function store(Request $request){
        Excel::import(new UserImport, $request->file);
        Excel::import(new StudentImport, $request->file);
        Excel::import(new AddressImport, $request->file);
        return redirect()->back()->with('msg','Bullk Upload Success!');
    }
}
