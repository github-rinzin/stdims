@extends('layouts.teacher')
@section('content')


<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement&nbsp;</h3>
        @include('components.previous') 
    </div>
    <div class="card shadow">
        <div class="card-header">
            <div class="card-text">
                <p class="align-baseline">Student Name: Dorji&nbsp;</p>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-left">Serial Number</th>
                            <th class="text-left">Subject</th>
                            <th class="text-left">Date</th>
                            <th class="text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Drinking&nbsp;</td>
                            <td>1/JAN/2020</td>
                            <td><a class="text-center text-dark" href="statement-show.html" style="padding: 11px;"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Smoking</td>
                            <td>1/FEB/2021</td>
                            <td><a class="text-center text-dark" href="statement-show.html" style="padding: 11px;"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Fighting</td>
                            <td>2/FEB/2021</td>
                            <td><a class="text-center text-dark" href="statement-show.html" style="padding: 11px;"><i class="fa fa-eye"></i></a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Serial Number</strong></td>
                            <td class="text-left"><strong>Subject</strong></td>
                            <td class="text-left"><strong>Date&nbsp;</strong></td>
                            <td class="text-left"><strong>Actions</strong></td>
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