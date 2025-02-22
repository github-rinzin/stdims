@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student list for {{  $teacher->classDivision->grade->numeric.' '.$teacher->classDivision->division->name }}</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Student Number</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Age</th>
                            <th class="text-left">CID</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $student->code }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->cid }}</td>
                            <td class="text-center">
                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-info">
                                    edit
                                </a>
                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-sm btn-primary">
                                    view
                                </a>
                                <button data-action="{{route('student.destroy', $student->id)}}" class="btn btn-sm btn-dark delete-student-admin"  data-target="#delete-student-personal-detail" data-toggle="modal">
                                    delete
                                </button>
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
                            <td><strong>Name</strong></td>
                            <td><strong>Age</strong></td>
                            <td class="text-left"><strong class="text-center">CID</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                         {{ $students->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

 
@endsection