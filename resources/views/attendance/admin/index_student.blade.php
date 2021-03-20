@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student Attendance list for class {{ $teacher->classDivision->grade->numeric.' '. $teacher->classDivision->division->name}}</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table-bordered table-sm table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Student Number</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th class="text-center">Percentage</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($students->isEmpty())
                        @else  
                        @foreach ($students as $student) 
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->code}}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->attendanceStatus()['numerator'].'/'.$student->attendanceStatus()['denomerator'] }}</td>
                            <td class="text-center">{{ $student->attendanceStatus()['percentage'].'%' }} </td>
                            <td>
                                @if ($student->attendanceStatus()['denomerator'] != 0)
                                <a class="text-center" href="{{ route('index.student.attendance', $student->id)}}" style="padding: 11px;">
                                    <button class="btn btn-sm text-uppercase btn-primary" type="submit">
                                        view
                                    </button>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Student Number</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Status</strong></td>
                            <th class="text-center">Percentage</th>
                            <td><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            {{ $students->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection