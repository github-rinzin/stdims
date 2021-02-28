@extends('layouts.teacher')
@section('content')
   
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">{{  __('Rinzin Dorji') }}</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Date</th>
                            <th class="text-left">Day</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>20/07/2021</td>
                            <td>Monday</td>
                            <form action="" method="">
                                @csrf
                                <td class="text-center">
                                    <input type="checkbox" checked="">
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <button class="btn btn-sm btn-success">
                                            save
                                        </button>
                                    </a>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><strong>#</strong></td>
                            <td><strong>Date</strong></td>
                            <td class="text-left"><strong>Day</strong></td>
                            <td class="text-center"><strong>Status</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
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