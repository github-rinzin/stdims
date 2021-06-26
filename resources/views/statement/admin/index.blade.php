@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0"></h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Subject</th>
                            <th class="text-center">Date of Statement</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statements as $statement)  
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $statement->subject}}</td>
                            <td class="text-center">{{ $statement->created_at->format('Y-m-d')}}</td>
                            <td class="text-center">
                                <a class="text-center text-dark" href="{{ route('statement.show', $statement->id ) }}" style="padding: 11px;">
                                    <button class="btn btn-sm btn-primary">detail</button>
                            	</a>
                            	<a class="text-center text-dark" href="#"  data-toggle="modal" data-target="#delete-student-personal-detail">
                                    <button data-action="{{route('statement.destroy', $statement->id)}}" class="btn btn-sm btn-dark delete-statement-admin"  data-target="#delete-student-statement" data-toggle="modal">
                                        delete
                                    </button>
                            	</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td class="text-left"><strong>Subject</strong></td>
                            <td class="text-center"><strong>Date of Statement</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.delete-statement-admin').click(function (e) { 
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
<div class="modal fade" role="dialog" tabindex="-1" id="delete-student-statement">
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
@endsection