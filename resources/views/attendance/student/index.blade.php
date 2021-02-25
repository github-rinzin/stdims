@extends('layouts.student')
@section('content')

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-ios-book"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Student IMS</span></div>
                </a>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href=""><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href=""><i class="fas fa-table"></i><span>Attendance</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href=""><i class="fas fa-table"></i><span>Statement</span></a></li>  
                    <li class="nav-item" role="presentation"><a class="nav-link" href=""><i class="fas fa-plus"></i><span>Join Class</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href=""><i class="fas fa-table"></i><span>Result</span></a></li>     
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                @include('components.topbar')
                
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Attendance</h3><a class="bg-light" href="#"></a></div>
                </div>
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Attandance Info</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Serial Number</th>
                                            <th>Date</th>
                                            <th>Day</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>12/10/2021</td>
                                            <td>Monday</td>
                                            <td>P</td>
                                        </tr>
                                        <tr>
                                            <td>0002</td>
                                            <td>12/10/2021</td>
                                            <td>Tuesday</td>
                                            <td>P</td>
                                        </tr>
                                        <tr>
                                            <td>0003</td>
                                            <td>10/01/2021</td>
                                            <td>Wednesday</td>
                                            <td>A</td>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
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
            </div>
        </div>
    </div>
</div>
@endsection
