@extends('layouts.admin')
@section('content')
<div class="container">
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
                                    <th>Stream</th>
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
                                    <td class="text-capitalize">
                                        @if ($teacher->classDivision->stream != null)
                                        {{ $teacher->classDivision->stream->name }}
                                        @else
                                            NA
                                        @endif
                                    </td>
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
                                    <th class="text-center">Actions</th>
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
                        <div class="card-header bg-primary text-white">
                            Upload Student in Bulk
                        </div>
                        <div class="card-body">
                            <form action="{{ route('bulk.student.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="file" class="@error('title') is-invalid @enderror">Excel file</label>
                                    <input type="file" name="file" id="file" class="form-control form-control-sm p-0" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" style="border:none;">
                                    @error('file')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-sm btn-info">
                                    Bulk Upload
                                </button>
                            </form>
                        </div>
                        <div class="card-footer bg-primary text-white">
                            <a href="/sample/student.xlsx" class="btn btn-sm btn-white text-white mt-2">
                                <div class="fa fa-download mr-2"></div>Download sample file   
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" card-footer">
            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                {{ $teachers->links()}}
            </nav>
        </div>
    </div>
    <h3 class="text-dark mb-0 mt-4">Student Without Class</h3>

    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Student Number</th>
                            <th class="text-left">CID</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Age</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $student->code }}</td>
                            <td>{{ $student->cid }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td class="text-center">
                                {{-- <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-info">
                                    edit
                                </a> --}}
                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-sm btn-primary">
                                    view
                                </a>
                                {{-- <button data-action="{{route('student.destroy', $student->id)}}" class="btn btn-sm btn-dark delete-student-admin"  data-target="#delete-student-personal-detail" data-toggle="modal">
                                    delete
                                </button> --}}
                            </td>
                        </tr>                      
                        @endforeach
                        <script>
                            $(document).ready(function () {
                                $('.delete-student-admin').click(function (e) { 
                                    e.preventDefault();
                                    let action = $(this).attr('data-action');
                                    $('.delete-form').attr('action', action);
                                });
                                $('.confirm-class-delete').click(function (e) { 
                                    $('.delete-form').submit();
                                });
                            });
                        </script>
                        {{-- delete modal - start --}}
                        <div class="modal fade" role="dialog" tabindex="-1" id="delete-student-personal-detail">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Warning!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                    <div class="modal-body">
                                        <p>You are about to delete the detail permenantly !</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                                        <button  type="submit" class="btn btn-primary btn-sm confirm-class-delete">Confirm, Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- delete modal - end --}}
                        <form class="delete-form" action="" method="post">
                            @csrf
                            @method('delete')
                        </form>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <td><strong>Student Number</strong></td>
                            <td class="text-left"><strong class="text-center">CID</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Age</strong></td>
                            <th class="text-center">Actions</th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                {{ $students->links()}}
             </nav>
        </div>
    </div>
</div>
@endsection