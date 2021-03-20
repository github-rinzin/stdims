@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75 ">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class Teacher List</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-left">#</th>
                                    <th class="text-left">Class</th>
                                    <th class="text-left">Section</th>
                                    <th class="text-left">Class teacher name</th>
                                    <th class="text-left">Total student</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)     
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $teacher->classDivision->grade->numeric }}</td>
                                    <td class="text-left">{{ $teacher->classDivision->division->name }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->totalStudents() }}</td>
                                    <td class="text-center">
                                    <a href="{{ route('index.class.detail', $teacher->id ) }}">
                                        <button class="btn btn-sm btn-primary">
                                            view
                                        </button>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><strong>#</strong></td>
                                    <td><strong>Class</strong></td>
                                    <td><strong>Section</strong></td>
                                    <td class="text-left"><strong class="text-center">Class Teacher Name</strong></td>
                                    <th class="text-left">Total Student</th>
                                    <td class="text-center"><strong>Actions</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Upload Student in Bulk
                        </div>
                        <div class="card-body">
                            <form action="{{ route('bulk.student.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="file">Excel file</label>
                                    <input type="file" name="file" id="file" class="form-control form-control-sm p-0" style="border:none;">
                                </div>
                                <button type="submit" class="btn btn-sm btn-info">
                                    Bulk Upload
                                </button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <a href="/sample/student.xlsx" class="btn btn-sm btn-dark mt-2">
                                Download sample file
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                       {{ $teachers->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection