@extends('layouts.teacher')
@section('content')
<div class="container-fluid ">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard</h3>
        @include('components.previous')
    </div>
    <div class="row">
        <div class="col">
            <div class="card shadow mt-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Student</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Student Number</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>12180038</td>
                                    <td>Rinzin Dorji</td>
                                    <td>Dorji Sonam</td>
                                    <td>17418360</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>12180038</td>
                                    <td>Rinzin Dorji</td>
                                    <td>Dorji Sonam</td>
                                    <td>17418360</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>12180038</td>
                                    <td>Rinzin Dorji</td>
                                    <td>Dorji Sonam</td>
                                    <td>17418360</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><strong>#</strong></td>
                                    <td><strong>Student Number</strong></td>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Class</strong></td>
                                    <td><strong>Section</strong></td>
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
        <div class="col">
            <div class="card shadow mt-3">
                <div class="card-header">
                    <p class="text-primary m-0 font-weight-bold">Attendance</p>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>12180001</td>
                                    <td>Dorji</td>
                                    <td class="text-center">12/12</td>
                                </tr>    
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Student Number</th>
                                    <th>Student Name</th>
                                    <th class="text-center">Status</th>
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
    </div>
</div>
 @endsection