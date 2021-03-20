@extends('layouts.teacher')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard</h3>
        @include('components.previous')
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
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Student Number</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td >{{ $student->code }}</td>
                                    <td class="text-capitalize">{{ $student->name }}</td>
                                    <td class="text-capitalize">{{ $student->fathers_name }}</td>
                                    <td>{{ $student->fathers_contact }}</td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><strong>#</strong></td>
                                    <td><strong>Student Number</strong></td>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Fathers Name</strong></td>
                                    <td><strong>Contact</strong></td>
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
                            <thead>
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