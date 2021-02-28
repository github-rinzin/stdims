@extends('layouts.teacher')
@section('content')


<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Attendance&nbsp;</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <form class="float-left form-inline mr-auto" target="_self">
                        <div class="form-group">
                            <label for="search-field"></label>
                            <input class="form-control search-field" type="search" id="search-field" name="search" placeholder="Search by name"><i class="fa fa-search ml-2" style="font-size: 20pt;"></i>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <button class="btn btn-sm btn-primary float-right" type="button">
                            <i class="fas fa-plus"></i>&nbsp;Add&nbsp;
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>12180001</td>
                            <td>Dorji</td>
                            <td class="text-center">12/12</td>
                            <td class="text-center">
                                <a href="attendance-show.html">
                                    {{-- <i class="fa fa-eye" style="/*font-size: 27px;*//*color: rgb(87,97,201);*/"></i> --}}
                                    <button class="btn btn-sm btn-primary">
                                        view
                                    </button>
                                </a>
                            </td>
                        </tr>    
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
