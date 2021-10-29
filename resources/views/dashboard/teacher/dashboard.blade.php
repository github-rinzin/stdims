@extends('layouts.teacher')
@section('content')
<style>
       thead {
  background-color: #343a40;
}
</style>
<div class="container-fluid ">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard</h3>
        @include('components.previous')
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Number of students</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>
                                @if(auth()->user()->teacher->classDivision->students != null)
                                {{ 
                                    auth()->user()->teacher->classDivision->students->count()
                                }}
                                @else  
                                    No Data
                                @endif 
                            </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Grade/Division/Stream</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>
                                @if(auth()->user()->teacher->classDivision != null)
                                {{ 
                                    auth()->user()->teacher->classDivision->grade->numeric."/".auth()->user()->teacher->classDivision->division->name
                                }}
                                    @if (auth()->user()->teacher->classDivision->stream != null)
                                    {{ auth()->user()->teacher->classDivision->stream->name }}
                                    @endif
                                @else  
                                    No Data
                                @endif 
                            </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <div class="card shadow mt-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Student</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Student Number</th>
                                    <th>CID</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Father Contact</th>
                                    <th>Mother Name</th>
                                    <th>Mother Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td >{{ $student->code }}</td>
                                    <td >{{ $student->cid }}</td>
                                    <td class="text-capitalize">{{ $student->name }}</td>
                                    <td class="text-capitalize">{{ $student->fathers_name }}</td>
                                    <td>{{ $student->fathers_contact }}</td>
                                    <td class="text-capitalize">{{ $student->mothers_name }}</td>
                                    <td>{{ $student->mothers_contact }}</td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><strong>#</strong></td>
                                    <td><strong>Student Number</strong></td>
                                    <th>CID</th>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Fathers Name</strong></td>
                                    <td><strong>Contact</strong></td>
                                    <th>Mother Name</th>
                                    <th>Mother Contact</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="float-right">
                                {{ $students->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <p class="text-primary m-0 font-weight-bold">Attendance</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Student Number</th>
                                    <th>Student Name</th>
                                    <th class="text-center">Percentage</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student) 
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $student->code}}</td>
                                    <td>{{ $student->name }}</td>
                                    
                                    <td class="text-center">{{ $student->attendanceStatus()['percentage'].'%' }} </td>
                                    <td>
                                        <a class="text-center" href="{{ route('teacher.attendance.show', $student->id) }}" style="padding: 11px;">
                                            <button class="btn btn-sm text-uppercase btn-primary" type="submit">
                                                view
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Student Number</th>
                                    <th>Student Name</th>
                                    <th class="text-center">Percentage</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-6">
                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-12">
                        <div class="float-right">
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection