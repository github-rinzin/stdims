<?php

namespace App\Http\Controllers;

use App\Result_7_8;
use Illuminate\Http\Request;
use App\Imports\Result78Import;
use Maatwebsite\Excel\Facades\Excel;

class Result78Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return 'fine';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result_7_8  $result_7_8
     * @return \Illuminate\Http\Response
     */
    public function show(Result_7_8 $result_7_8)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result_7_8  $result_7_8
     * @return \Illuminate\Http\Response
     */
    public function edit(Result_7_8 $result_7_8)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result_7_8  $result_7_8
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result_7_8 $result_7_8)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result_7_8  $result_7_8
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result_7_8 $result_7_8)
    {
        //
    }
}
