@extends('layouts.teacher')
@section('content')

<div class="container-fluid w-75">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Attendance</h3>
    @include('components.previous')
</div>
<form name="teacher-attendance" action="{{ route('attendance.store') }}" method="POST">
    @csrf
    @method('post')
<div class="card shadow">
    <div class="card-header ">
        <div class="m-0 p-0 form-group form-inline">
            <label>Attendance for :&nbsp;&nbsp;</label>
            <input name="date" class="form-control" type="date" required @error('date') is-invalid @enderror>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        @error('date')
            <div class="arlert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="card-body">
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <input type="hidden" name="student_id[]" value="{{ $student->id}}">
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $student->code }}</td>
                            <td>{{ $student->name }}</td>
                            <td class="text-center">
                                <input type="hidden" name="status[]" value="true">
                                <input  class="ml-0" type="checkbox"  checked>
                            </td>
                            <script>
                            $(document).ready(function () {
                                $('input[type=checkbox]').on('change', function() {
                                    let value = $(this).is(':checked');
                                    $(this).prev('input[type=hidden]').val(value);
                                });
                            });
                            </script>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <button class="float-right btn btn-sm btn-primary" type="submit">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
    
 @endsection