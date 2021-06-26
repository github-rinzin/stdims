@extends('layouts.teacher')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="">
                        <p class="text-primary m-0 font-weight-bold">Student Information</p>
                    </div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Actions</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            
                        <tr>
                            <td class="text-center">1</td>
                            <td>{{ $student->code }}</td>
                            <td>{{ $student->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('student.show', $student->id) }}">
                                    <button class="btn btn-sm btn-primary">
                                        view
                                    </button>
                                </a>
                                <a href="{{ route('student.edit', $student->id ) }}">
                                    <button class="btn btn-sm btn-info">
                                        edit
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
                            <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers float-right">
                        {{$students->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
            
@endsection