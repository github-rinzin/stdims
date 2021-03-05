@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75 ">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Class</th>
                            <th class="text-left">Section</th>
                            <th class="text-left">Class Teacher</th>
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
                            <td class="text-center">
                            <a href="{{ route('index.class.result', $teacher->id ) }}">
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
                            <td class="text-left"><strong class="text-center">Class Teacher</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
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