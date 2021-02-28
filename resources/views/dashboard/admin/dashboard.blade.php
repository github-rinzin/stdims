@extends('layouts.admin')
@section('content')    
   
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark mb-0">Dashboard</h4>
        @include('components.previous')
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Number of students</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>40,000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>number of classteacher</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>5,000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>number of class</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>18</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Class Teacher&nbsp;</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Grade</th>
                            <th>Section</th>
                            <th>Total student</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rinzin Dorji</td>
                            <td>3</td>
                            <td>A</td>
                            <td>33</td>
                        </tr>
                    
                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Grade</strong></td>
                            <td><strong>Section</strong></td>
                            <td><strong>Total Student</strong></td>
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
    <div class="card shadow mt-3">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Student</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Student Number</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Section</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5</td>
                            <td>12180038</td>
                            <td>Rinzin Dorji</td>
                            <td>10</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
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

@endsection



