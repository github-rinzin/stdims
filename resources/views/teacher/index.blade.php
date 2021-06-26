@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Teacher </h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header">
            <a class="btn btn-sm btn-primary float-right" href="{{ route('teacher.create') }}">Add New Teacher</a>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Grade</th>
                            <th>Section</th>
                            <th>Stream</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher) 
                           
                        <tr>
                            <td>{{ $i++}}</td>
                            <td class="text-capitalize">{{ $teacher->name }}</td>
                            <td>{{ $teacher->ClassDivision->grade->numeric }}</td>
                            <td>{{ $teacher->classDivision->division->name  }}</td>
                            <td class="text-capitalize">
                                @if ($teacher->classDivision->stream != null)
                                    {{ $teacher->classDivision->stream->name }} 
                                @else 
                                    {{ __("N/A") }}
                                @endif
                            </td>
                            <th>
                            
                                <button data-action="{{route('teacher.destroy', $teacher->id)}}" class="btn btn-sm btn-dark delete-student-admin"  data-target="#delete-teacher" data-toggle="modal">
                                    delete
                                </button>

                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Grade</strong></td>
                            <td><strong>Section</strong></td>
                            <th>Stream</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                        {{ $teachers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.delete-student-admin').click(function (e) { 
            e.preventDefault();
            let action = $(this).attr('data-action');
            $('.delete-form').attr('action', action);
        });
        $('.confirm-delete-bnt').click(function (e) { 
            $('.delete-form').submit();
        });
    });
</script>
{{-- delete modal - start --}}
<div class="modal fade" role="dialog" tabindex="-1" id="delete-teacher">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Warning!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p>You are about to delete the detail permenantly !</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-primary btn-sm confirm-delete-bnt">Confirm, Delete</button>
            </div>
        </div>
    </div>
</div>
{{-- delete modal - end --}}
<form class="delete-form" action="" method="post">
    @csrf
    @method('delete')
</form>
@endsection