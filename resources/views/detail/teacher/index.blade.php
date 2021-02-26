@extends('layouts.teacher')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Student Information</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <form class="form-inline mr-auto" target="_self">
                                <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" id="search-field" name="search" placeholder="Search by name"><i class="fa fa-search ml-2" style="font-size: 20pt;"></i></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>&nbsp;Pema Yangzin</td>
                            <td><a href="student-details-show.html"><i class="fa fa-eye" style="margin: 2%;color: rgb(87,97,201);padding: 7px;"></i></a><a href="student-details-edit.html"><i class="fa fa-pencil-square-o" style="margin: 2%;color: rgb(87,97,201);padding: 7px;"></i></a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
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