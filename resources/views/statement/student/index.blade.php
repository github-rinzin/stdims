@extends('layouts.student')
@section('content')

<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header d-flex flex justify-content-end p-0 pt-3 pr-3">
            <div class="card-header m-0 p-0 border-0"><a class="p-0" href="{{ route('statement.create') }}"><button class="btn btn-sm btn-primary m-0 mb-2" type="button"><i class="fas fa-pen-nib"></i>&nbsp;Write</button></a></div>
        </div>
        <div class="card-body">
            <div class="table-responsive table " id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statements as $statement)   
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $statement->subject}}</td>
                            <td>{{ $statement->created_at->format('Y-m-d')}}</td>
                            <td class="text-center p-0 py-1 mb-1 ">
                                <a href="{{ route('statement.show', $statement->id)}}">
                                    {{-- <i class="far fa-eye"></i> --}}
                                    <button class="btn btn-sm btn-primary m-0">view</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Subject</strong></td>
                            <td><strong>Date</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-lg-end">
                <div class="col-md-6"></div>
                <div class="col">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            {{ $statements->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection