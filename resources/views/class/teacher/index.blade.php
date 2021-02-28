@extends('layouts.teacher')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Unapproved Student <span class="badge badge-secondary"> 12 </span> </h3>
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
                        <tr>
                            <td class="text-center">1</td>
                            <td>12180031</td>
                            <td>
                                Pema Namgay
                            </td>
                            <td class="text-center">
                                <a href="#">
                                    <button class="btn btn-sm btn-success">
                                        approve
                                    </button>
                                </a>
                                <a href="#">
                                    <button class="btn btn-sm btn-danger">
                                        reject
                                    </button>
                                </a>
                                
                            </td>
                        </tr>
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