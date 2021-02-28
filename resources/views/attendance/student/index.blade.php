@extends('layouts.student')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark mb-0">Attendance</h4>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Attandance Information</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Day</th>
                            <th>Date</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Monday</td>
                            <td>12/10/2021</td>
                            <td class="text-center">P</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Serial Number</th>
                            <th>Day</th>
                            <th>Date</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col">
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
