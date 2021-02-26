@extends('layouts.student')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement</h3>
        @include('components.previous')
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header d-flex flex justify-content-end p-0 pt-3 pr-3">
            <div class="card-header m-0 p-0 border-0"><a class="p-0" href="statement-create.html"><button class="btn btn-primary m-0 mb-2" type="button"><i class="fas fa-pen-nib"></i>&nbsp;Write</button></a></div>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Fighting</td>
                            <td>2008/11/28</td>
                            <td class="text-center"><a href=""><i class="far fa-eye"></i></a></td>
                        </tr>
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