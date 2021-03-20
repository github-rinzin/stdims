@extends('layouts.teacher')
@section('content')
<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Unapproved Student <span class="badge badge-secondary"> {{ $join_reqs->count()}} </span> </h3>
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
                            <th class="text-left">Student Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($join_reqs as $item)    
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                {{ $item->student->code}}
                            </td>
                            <td>
                                {{ $item->student->name}}
                            </td>
                            <form action="{{ route('join.approve') }}" method="post">
                                @csrf
                                <input class="d-none" type="text" name="class_id" value="{{ $item->class_division_id }}">
                                <input class="d-none" type="text" name="student_id" value="{{ $item->student_id }}">
                                <input  class="d-none"type="text" name="request_id" value="{{ $item->id }}">
                                <td class="text-center">
                                    <button type="submit" class="btn btn-sm btn-success">
                                        approve
                                    </button>
                            </form>
                            <form action="{{ route('join.destroy', $item->id) }}" method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger">
                                    reject
                                </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Student Number</th>
                            <th class="text-left">Student Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row ml-auto justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            {{ $join_reqs->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection