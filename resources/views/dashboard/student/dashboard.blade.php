@extends('layouts.student')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark mb-0">Dashboard</h4>
        @include('components.previous')
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Number of statements</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span></span>{{
                                auth()->user()->student->statements->count()
                            }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Attendance state</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span></span>
                                {{
                                    auth()->user()->student->attendanceStatus()['percentage'].'%'
                                }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>grade/section/stream</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0 text-capitalize"><span></span>
                                @if (auth()->user()->student->classDivision != null)
                                    @if (Auth::user()->student->classDivision->grade->numeric > 10)
                                        {{Auth::user()->student->classDivision->grade->numeric.'/'.Auth::user()->student->classDivision->division->name.'/'.Auth::user()->student->classDivision->stream->name}}   
                                    @else
                                    {{Auth::user()->student->classDivision->grade->numeric.'/'.Auth::user()->student->classDivision->division->name}}   
                                        
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Class teacher</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0 text-capitalize"><span></span>
                                @if (auth()->user()->student->class_division_id != null)
                                    @if (Auth::user()->student->classDivision->teacher != null)
                                        
                                        {{Auth::user()->student->classDivision->teacher->name}}
                                    @else  
                                        Class Teacher Not Assigned
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection