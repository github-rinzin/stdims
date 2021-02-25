@extends('layouts.teacher')
@section('content')
<div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-ios-book"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>STUDENT IMS</span></div>
                </a>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="class-teacher-dashboard-index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="approve-student-index.html"><i class="fas fa-table"></i><span>Approve Student</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-users"></i><span>Student Details</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="attendance-index.html"><i class="fas fa-user-check"></i><span>Attendance</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="statement-student-index.html"><i class="fa fa-id-card-o"></i><span>Student's Statement</span></a><a class="nav-link" href="result-index.html"><i class="fas fa-signal"></i><span>Result Management</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content-1">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <li class="nav-item dropdown no-arrow" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Jarna Gurung</span><div class="dropdown-divider"></div></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                                    role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4" placeholder="search by name">
                        <h3 class="text-dark mb-0">Statement&nbsp;</h3><a class="ml-auto" href="class-teacher-dashboard.html"><button class="btn ml-auto" type="button"><i class="fa fa-long-arrow-left"></i>&nbsp;Back&nbsp;</button></a></div>
                </div>
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header">
                            <form class="form-inline mr-auto" target="_self">
                                <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" id="search-field" name="search" placeholder="Search by name...."></div><i class="fa fa-search ml-2" style="font-size: 20pt;"></i></form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Student Number</th>
                                            <th class="text-left">Name</th>
                                            <th class="text-left">Number of Statement</th>
                                            <th class="text-left">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12180080</td>
                                            <td>Choki Wangchuk</td>
                                            <td>1</td>
                                            <td class="text-dark"><a class="text-center" href="statement-index.html" style="padding: 11px;"><i class="fa fa-eye" style="/*color: black;*/"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>12180085</td>
                                            <td>Jarhna Gurung</td>
                                            <td>2</td>
                                            <td><a class="text-center" href="statement-index.html" style="padding: 11px;"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>12180095</td>
                                            <td>Pema Namgay</td>
                                            <td>0</td>
                                            <td><a class="text-center" href="statement-index.html" style="padding: 11px;"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Student Number</strong></td>
                                            <td><strong>Name</strong></td>
                                            <td class="text-left"><strong>Number of Statement</strong></td>
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
            </div>
@endsection