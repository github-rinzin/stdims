@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-3">
        <h3 class="text-dark mb-0">{{ $statement->student->name }}</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div>
                <div class="form-group"><label>Subject</label><input class="form-control border-0" type="text" readonly="" disabled="" value="{{ $statement->subject}}"></div>
                <div class="form-group"><label>Date</label><input class="form-control border-0" type="text" readonly="" disabled="" value="{{ $statement->created_at->format('Y-m-d')}}"></div>
                <div class="form-group"><label>Content</label><textarea class="form-control form-control-lg border-0" readonly="" rows="5" disabled="">{{$statement->content}}</textarea></div>
                <button data-action="{{route('statement.destroy', $statement->id)}}" class="btn btn-sm btn-dark delete-student-admin"  data-target="#delete-statement" data-toggle="modal">
                    delete
                </button>
            </div>
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
            <div class="modal fade" role="dialog" tabindex="-1" id="delete-statement">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Warning!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <p>You are about to delete the statement permenantly !</p>
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
        </div>
    </div>
</div>
@endsection
