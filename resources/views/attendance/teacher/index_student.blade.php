@extends('layouts.teacher')
@section('content')


<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Attendance&nbsp;</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    {{-- <form class="float-left form-inline mr-auto" target="_self">
                        <div class="form-group">
                            <label for="search-field"></label>
                            <input class="form-control search-field" type="search" id="search-field" name="search" placeholder="Search by name"><i class="fa fa-search ml-2" style="font-size: 20pt;"></i>
                        </div>
                    </form> --}}
                </div>
                <div class="col-md-6">
                    <a href="{{ route('attendance.create') }}">
                        <button class="btn btn-sm btn-primary float-right" type="button">
                            <i class="fas fa-plus"></i>&nbsp;Add&nbsp;
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
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
                            <td>{{ $student->attendanceStatus()['numerator'].'/'.$student->attendanceStatus()['denomerator'] }}</td>
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
                            <th class="text-center">Status</th>
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
    </div>
</div>

@endsection
